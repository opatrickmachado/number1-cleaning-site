<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: public, max-age=900, s-maxage=900');

$placeId = 'ChIJj_xO9LkWUA8RbTNM7aZy_EE';
$apiKey = getenv('GOOGLE_PLACES_API_KEY') ?: '';

$fallback = [
  'live' => false,
  'source' => 'public Google listing snapshot',
  'rating' => 4.8,
  'userRatingCount' => 25,
  'reviews' => [],
  'message' => 'Add GOOGLE_PLACES_API_KEY on the server to load review text.'
];

if ($apiKey === '') {
  echo json_encode($fallback, JSON_UNESCAPED_SLASHES);
  exit;
}

$url = 'https://places.googleapis.com/v1/places/' . rawurlencode($placeId)
     . '?fields=displayName,rating,userRatingCount,reviews,googleMapsUri';

$ch = curl_init($url);
curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_TIMEOUT => 12,
  CURLOPT_HTTPHEADER => [
    'X-Goog-Api-Key: ' . $apiKey,
    'X-Goog-FieldMask: displayName,rating,userRatingCount,reviews,googleMapsUri',
    'Accept: application/json',
  ],
]);
$response = curl_exec($ch);
$httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($response === false || $httpCode < 200 || $httpCode >= 300) {
  echo json_encode(array_merge($fallback, ['message' => 'Google Places request failed; showing the verified aggregate snapshot instead.']), JSON_UNESCAPED_SLASHES);
  exit;
}

$data = json_decode($response, true);
if (!is_array($data)) {
  echo json_encode($fallback, JSON_UNESCAPED_SLASHES);
  exit;
}

$reviews = [];
foreach (($data['reviews'] ?? []) as $review) {
  $text = trim((string)($review['text']['text'] ?? ''));
  if ($text === '') continue;
  $reviews[] = [
    'text' => $text,
    'author' => (string)($review['authorAttribution']['displayName'] ?? 'Google customer'),
    'publishTime' => (string)($review['publishTime'] ?? ''),
    'rating' => (float)($review['rating'] ?? 0),
  ];
}

usort($reviews, static function(array $a, array $b): int {
  return strcmp($b['publishTime'], $a['publishTime']);
});

$out = [
  'live' => true,
  'source' => 'Google Places API',
  'rating' => isset($data['rating']) ? (float)$data['rating'] : $fallback['rating'],
  'userRatingCount' => isset($data['userRatingCount']) ? (int)$data['userRatingCount'] : $fallback['userRatingCount'],
  'reviews' => $reviews,
  'googleMapsUri' => (string)($data['googleMapsUri'] ?? ''),
];

echo json_encode($out, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
