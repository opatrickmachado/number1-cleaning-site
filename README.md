# Number1 Cleaning — modern PHP website

Premium one-page website for Number1 Cleaning built with PHP, HTML, CSS and vanilla JavaScript.

## What's new
- Modern glassmorphism header and premium navy/gold visual system.
- Responsive service cards, hover micro-interactions, reveal animations and mobile CTA.
- Redesigned social media / review area with modern inline SVG icons.
- Google review panel with a 4.8/5 and 25-review public listing snapshot sourced during the update.
- Optional live Google Places API integration. When configured, the page loads Google review text into the carousel without exposing the API key to the browser.
- No review text is invented when live API data is unavailable.

## Live Google Reviews
The file `api/reviews.php` uses the Google Places API (New) and the Number1 Cleaning Place ID found during research:
`ChIJj_xO9LkWUA8RbTNM7aZy_EE`

Set a server environment variable:

```bash
GOOGLE_PLACES_API_KEY=YOUR_KEY_HERE
```

The API key should stay server-side. Make sure the Google Places API is enabled for the project and billing/quota are configured according to Google Cloud requirements.

Google's Places API returns a limited set of reviews for a place. This site sorts the returned reviews by `publishTime` before presenting them; it does not claim to retrieve every review ever posted.

## Local run

```bash
cd number1-cleaning-site
GOOGLE_PLACES_API_KEY=YOUR_KEY_HERE php -S localhost:8000
```

Without the API key, the website still renders the verified aggregate snapshot and links visitors to the Google Business profile.
