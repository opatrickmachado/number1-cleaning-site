<?php
$quoteUrl = 'https://form.typeform.com/to/luOaKTo0';
$socials = [
  'facebook' => 'https://www.facebook.com/numberone1cleaning/',
  'instagram' => 'https://www.instagram.com/number1cleaningtx/',
  'google' => 'https://share.google/Ghkaz6gcpboJnsWNW',
  'nextdoor' => 'https://nextdoor.com/pages/number1cleaning-arlington-tx?utm_campaign=1789498751220&share_action_id=e1dbfc11-209d-4d00-bb66-5b18cd9fafe5',
];
$areas = ['Austin, TX','Cedar Park, TX','Leander, TX','Liberty Hill, TX','Georgetown, TX','Round Rock, TX','Hutto, TX','Lago Vista, TX','Bee Cave, TX','Steiner Ranch, TX'];

function esc(string $value): string {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
function icon(string $name): string {
  $icons = [
    'facebook' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.5 1.6-1.5h1.8V4a17.4 17.4 0 0 0-2.6-.2c-2.6 0-4.3 1.6-4.3 4.4V10H7.3v3h2.7v8h3.5Z"/></svg>',
    'instagram' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.3" y="3.3" width="17.4" height="17.4" rx="5.1"/><circle cx="12" cy="12" r="4.1"/><circle cx="17.7" cy="6.5" r="1.05" class="dot"/></svg>',
    'google' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21.4 12.2c0-.7-.1-1.4-.2-2H12v3.8h5.2a4.5 4.5 0 0 1-1.9 3v2.5h3.1c1.8-1.7 3-4.3 3-7.3Z"/><path d="M12 21.7c2.6 0 4.8-.9 6.4-2.4l-3.1-2.5c-.9.6-2 .9-3.3.9-2.5 0-4.6-1.7-5.4-4h-3.2v2.6a9.7 9.7 0 0 0 8.6 5.4Z"/><path d="M6.6 13.7a5.9 5.9 0 0 1 0-3.5V7.6H3.4a9.7 9.7 0 0 0 0 8.7l3.2-2.6Z"/><path d="M12 6.1c1.4 0 2.6.5 3.6 1.4l2.7-2.7C16.8 3.2 14.6 2.3 12 2.3a9.7 9.7 0 0 0-8.6 5.3l3.2 2.6c.8-2.4 2.9-4.1 5.4-4.1Z"/></svg>',
    'nextdoor' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.1 10.2 12 4.3l-8.1 5.9v8.4h4.4v-5.5h7.4v5.5h4.4v-8.4Zm-6.2 1H10V9.5h3.9v1.7Z"/></svg>',
    'sparkle' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.4c.4 4.2 2.2 6 6.4 6.4-4.2.4-6 2.2-6.4 6.4-.4-4.2-2.2-6-6.4-6.4 4.2-.4 6-2.2 6.4-6.4Zm6.2 9.6c.2 2.1 1.1 3 3.2 3.2-2.1.2-3 1.1-3.2 3.2-.2-2.1-1.1-3-3.2-3.2 2.1-.2 3-1.1 3.2-3.2Z"/></svg>',
    'arrow' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13.2M13 6.8l5.2 5.2-5.2 5.2"/></svg>',
  ];
  return $icons[$name] ?? '';
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Number1 Cleaning — professional residential, Airbnb and commercial cleaning services in Austin and surrounding communities in Texas.">
  <meta name="theme-color" content="#071c3a">
  <meta property="og:title" content="Number1 Cleaning | Clean Spaces. Happy Places.">
  <meta property="og:description" content="Dependable cleaning service with attention to detail for homes, businesses and vacation rentals.">
  <meta property="og:image" content="assets/logo.png">
  <title>Number1 Cleaning | Clean Spaces. Happy Places.</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <div class="topbar">
    <div class="container topbar-inner">
      <span><span class="pulse-dot"></span> Now serving Austin &amp; surrounding communities</span>
      <div class="topbar-socials" aria-label="Follow Number1 Cleaning">
        <?php foreach (['google','facebook','instagram','nextdoor'] as $key): ?>
          <a href="<?php echo esc($socials[$key]); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo ucfirst($key); ?>" title="<?php echo ucfirst($key); ?>">
            <?php echo icon($key); ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <header class="site-header" id="siteHeader">
    <div class="container nav-wrap">
      <a class="brand" href="#home" aria-label="Number1 Cleaning home">
        <img src="assets/logo.png" alt="Number1 Cleaning — Clean Spaces. Happy Places." class="brand-logo">
      </a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mainNav" aria-label="Open navigation"><span></span><span></span><span></span></button>
      <nav class="main-nav" id="mainNav" aria-label="Primary navigation">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#about">About Us</a>
        <a href="#reviews">Reviews</a>
        <a href="#areas">Areas We Serve</a>
        <a href="#contact">Contact</a>
        <a class="btn btn-gold nav-cta" href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Request a Quote <span>↗</span></a>
      </nav>
    </div>
  </header>

  <main id="main">
    <section class="hero section" id="home">
      <div class="hero-orb hero-orb-one"></div><div class="hero-orb hero-orb-two"></div>
      <div class="container hero-grid">
        <div class="hero-copy reveal">
          <div class="hero-kicker"><span class="kicker-line"></span><span>A cleaner space starts here</span></div>
          <h1>Clean feels <em>different.</em><br>When it’s <span>Number1.</span></h1>
          <p class="hero-text">Professional cleaning with dependable service, careful attention to detail, and the personal care your home, business, or rental deserves.</p>
          <div class="hero-actions">
            <a class="btn btn-gold btn-lg shine" href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Request a Quote <span>→</span></a>
            <a class="text-link" href="#services">Explore services <span>↓</span></a>
          </div>
          <div class="hero-proof">
            <div class="proof-avatar-stack" aria-hidden="true"><i>✓</i><i>✦</i><i>1</i></div>
            <div><strong>Detail-first cleaning</strong><span>Reliable service • Personal care</span></div>
          </div>
        </div>
        <div class="hero-visual reveal">
          <div class="hero-photo" role="img" aria-label="Bright, spotless living room"></div>
          <div class="hero-photo-glow"></div>
          <div class="hero-mini-card">
            <div class="mini-icon"><?php echo icon('sparkle'); ?></div>
            <div><strong>Fresh. Detailed. Ready.</strong><span>Clean Spaces. Happy Places.</span></div>
          </div>
          <div class="gold-card">
            <small>NUMBER1</small><strong>Clean Spaces.</strong><em>Happy Places.</em>
            <a href="#contact">Let’s make your space feel new <span>→</span></a>
          </div>
          <div class="floating-stamp"><span>TRUSTED</span><b>1</b><small>CLEANING</small></div>
        </div>
      </div>
      <div class="container hero-bottom"><span>Homes</span><span>Airbnb</span><span>Commercial</span><span>Move-In / Move-Out</span><span>Post-Construction</span></div>
    </section>

    <section class="marquee-strip"><div class="marquee-track"><span>REGULAR CLEANING</span><b>✦</b><span>DEEP CLEANING</span><b>✦</b><span>AIRBNB TURNOVERS</span><b>✦</b><span>COMMERCIAL</span><b>✦</b><span>MOVE-IN / MOVE-OUT</span><b>✦</b><span>POST-CONSTRUCTION</span><b>✦</b></div></section>

    <section class="section services-section" id="services">
      <div class="container">
        <div class="section-heading reveal">
          <div><p class="eyebrow">What we do</p><h2>Cleaning that fits <em>real life.</em></h2></div>
          <div class="heading-side"><p>From routine upkeep to detailed deep cleans, choose the service and schedule that fit your space.</p><a class="btn btn-dark" href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Request a Quote <span>↗</span></a></div>
        </div>
        <div class="service-grid">
          <?php
          $services = [
            ['01','Regular Cleaning','Reliable maintenance cleaning to keep your space fresh, comfortable, and consistently cared for.','↗'],
            ['02','Deep Cleaning','A detailed reset for built-up dust, grime, overlooked areas, and spaces ready for a fresh start.','✦'],
            ['03','Move-In / Move-Out','Detailed cleaning to help a home feel ready for the next chapter, whether you’re arriving or leaving.','⌂'],
            ['04','Airbnb / Vacation Rental','Guest-ready turnovers focused on presentation, consistency, and the details guests notice.','★'],
            ['05','Commercial Cleaning','Dependable cleaning support for offices and business spaces that need a polished, cared-for environment.','▦'],
            ['06','Post-Construction Cleaning','Remove construction dust and residue so your newly built or renovated space can shine.','⌁'],
          ];
          foreach ($services as $service): ?>
            <article class="service-card reveal">
              <div class="service-top"><span><?php echo $service[0]; ?></span><i><?php echo $service[3]; ?></i></div>
              <div class="service-icon-ring"><span>✦</span></div>
              <h3><?php echo esc($service[1]); ?></h3>
              <p><?php echo esc($service[2]); ?></p>
              <a href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Request a Quote <span>→</span></a>
            </article>
          <?php endforeach; ?>
        </div>
        <div class="frequency reveal">
          <div class="frequency-copy"><p class="eyebrow">Cleaning frequency</p><h3>One-time reset or a routine that keeps up.</h3><p>Flexible scheduling for homes, businesses, and rental properties.</p></div>
          <div class="frequency-options"><span>One-Time</span><span>Weekly</span><span>Biweekly</span><span>Monthly</span></div>
        </div>
      </div>
    </section>

    <section class="section about-section" id="about">
      <div class="container about-grid">
        <div class="about-photo-wrap reveal"><div class="about-photo" role="img" aria-label="Beautiful clean kitchen"></div><div class="about-photo-tag"><span>Founded on</span><strong>Trust</strong><small>Built through referrals &amp; relationships</small></div></div>
        <div class="about-copy reveal">
          <p class="eyebrow">About Number1 Cleaning</p><h2>Built on hard work.<br><em>Driven by care.</em></h2><span class="heading-rule"></span>
          <h3>Our Story</h3>
          <p>Number1 Cleaning was built from hard work, trust, and a true passion for taking care of people’s spaces.</p>
          <p>Founder Kelly began her journey in the cleaning industry working hands-on and building years of experience. As a single mother, she worked hard to provide for her family while becoming known for her attention to detail, reliability, and the quality of her work.</p>
          <p>What started as cleaning for others soon grew through word-of-mouth. Happy clients began recommending Kelly to friends and family, and those referrals eventually inspired her to create Number1 Cleaning and build a business of her own.</p>
          <p>After establishing strong relationships with clients in Florida, Number1 Cleaning brought that same experience, care, and commitment to Texas. Today, the company serves homes, businesses, Airbnb properties, and more throughout Austin and surrounding communities.</p>
          <p>Even as the company grows, the goal remains the same: to treat every space with care, deliver consistent quality, and create a clean environment clients can truly enjoy.</p>
          <blockquote>“Clean Spaces. Happy Places.”</blockquote>
        </div>
      </div>
    </section>

    <section class="section choose-section">
      <div class="container">
        <div class="section-heading center reveal"><p class="eyebrow">Why Number1 Cleaning?</p><h2>Cleaning you can trust,<br><em>with the care your space deserves.</em></h2><span class="heading-rule"></span><p>Experience, attention to detail, and dependable service—without making the process complicated.</p></div>
        <div class="feature-grid">
          <article class="feature-card reveal"><span>01</span><div class="feature-icon">✓</div><h3>Fully Insured</h3><p>Your home or business is in responsible hands, with added protection and peace of mind.</p></article>
          <article class="feature-card reveal"><span>02</span><div class="feature-icon">✦</div><h3>Experienced &amp; Trusted</h3><p>Built on hands-on cleaning experience and client referrals, with consistent quality at the center.</p></article>
          <article class="feature-card reveal"><span>03</span><div class="feature-icon">⌕</div><h3>Attention to Every Detail</h3><p>We focus on the details that make a space truly feel fresh, clean, and cared for.</p></article>
          <article class="feature-card reveal"><span>04</span><div class="feature-icon">◷</div><h3>Reliable &amp; Consistent</h3><p>Clear communication, punctuality, and a high standard from one cleaning to the next.</p></article>
          <article class="feature-card reveal"><span>05</span><div class="feature-icon">↺</div><h3>Cleaning That Fits Your Needs</h3><p>One-time, weekly, biweekly, or monthly service options based on your needs.</p></article>
          <article class="feature-card reveal"><span>06</span><div class="feature-icon">⌂</div><h3>Local Service, Personal Care</h3><p>A local company focused on long-term relationships and treating every property with care.</p></article>
        </div>
      </div>
    </section>

    <section class="review-section section" id="reviews">
      <div class="review-particles" aria-hidden="true"><span></span><span></span><span></span></div>
      <div class="container">
        <div class="review-heading reveal">
          <div><p class="eyebrow light">Customer love</p><h2>What clients are <em>saying.</em></h2></div>
          <div class="review-heading-side"><p>Real feedback matters. Our review panel is prepared to pull Google review text securely when a Google Places API key is configured.</p><a class="btn btn-light" href="<?php echo esc($socials['google']); ?>" target="_blank" rel="noopener noreferrer">Open Google Reviews <span>↗</span></a></div>
        </div>
        <div class="reviews-shell reveal" data-reviews-root>
          <div class="rating-panel">
            <div class="rating-source"><span class="social-icon google-bg"><?php echo icon('google'); ?></span><span><strong>Google Reviews</strong><small>Verified listing snapshot</small></span></div>
            <div class="rating-number" data-rating>4.8</div>
            <div class="stars" aria-label="4.8 out of 5 stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
            <p class="rating-count"><strong data-review-count>25</strong> reviews</p>
            <p class="rating-note">Current public listing snapshot found during site update. Review text can be kept live with the Google Places integration included in this package.</p>
            <a href="<?php echo esc($socials['google']); ?>" target="_blank" rel="noopener noreferrer" class="rating-link">Read on Google <span>↗</span></a>
          </div>
          <div class="reviews-stage">
            <div class="reviews-track" data-reviews-track aria-live="polite">
              <article class="review-empty-card"><span class="quote-mark">“</span><p>Live Google review text will appear here automatically after the Google Places API key is added to the server.</p><div class="review-author"><span class="author-dot">G</span><div><strong>Google reviews</strong><small>Live integration ready</small></div></div></article>
            </div>
            <div class="reviews-controls"><div class="review-dots" data-review-dots></div><div class="review-arrows"><button type="button" data-review-prev aria-label="Previous review">←</button><button type="button" data-review-next aria-label="Next review">→</button></div></div>
          </div>
        </div>
        <div class="social-proof-grid reveal">
          <a href="<?php echo esc($socials['facebook']); ?>" target="_blank" rel="noopener noreferrer" class="social-proof-card facebook-card"><span class="social-icon"><?php echo icon('facebook'); ?></span><div><strong>Facebook</strong><small>Community &amp; updates</small></div><span class="card-arrow">↗</span></a>
          <a href="<?php echo esc($socials['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="social-proof-card instagram-card"><span class="social-icon"><?php echo icon('instagram'); ?></span><div><strong>Instagram</strong><small>See the work &amp; behind the scenes</small></div><span class="card-arrow">↗</span></a>
          <a href="<?php echo esc($socials['nextdoor']); ?>" target="_blank" rel="noopener noreferrer" class="social-proof-card nextdoor-card"><span class="social-icon"><?php echo icon('nextdoor'); ?></span><div><strong>Nextdoor</strong><small>Local neighborhood recommendations</small></div><span class="card-arrow">↗</span></a>
        </div>
      </div>
    </section>

    <section class="section areas-section" id="areas">
      <div class="container">
        <div class="section-heading center reveal"><p class="eyebrow">Areas we serve</p><h2>Local service across <em>Greater Austin.</em></h2><span class="heading-rule"></span><p>Number1 Cleaning brings the same personal care and consistent standards throughout our service area.</p></div>
        <div class="areas-layout">
          <div class="areas-map-card reveal"><div class="texas-mark"><span>TX</span></div><div class="map-orbit"></div><div class="map-copy"><span class="map-mini">LOCAL • PERSONAL • DEPENDABLE</span><strong>Closer to home.<br>Closer to what matters.</strong><p>Homes, businesses, Airbnb properties, and more.</p><a class="text-link" href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Check availability for your address <span>→</span></a></div></div>
          <div class="areas-list reveal">
            <?php foreach ($areas as $i => $area): ?>
              <div class="area-pill"><span><?php echo str_pad((string)($i+1),2,'0',STR_PAD_LEFT); ?></span><strong><?php echo esc($area); ?></strong><i>↗</i></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="quote-banner"><div class="container quote-banner-inner"><div><p class="eyebrow">Ready when you are</p><h2>Let’s get your space back to feeling <em>its best.</em></h2></div><a class="btn btn-gold btn-lg shine" href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Request a Quote <span>↗</span></a></div></section>

    <section class="section contact-section" id="contact">
      <div class="container contact-grid">
        <div class="contact-copy reveal"><p class="eyebrow">Contact</p><h2>Start with a simple <em>quote request.</em></h2><span class="heading-rule"></span><p>Tell us what you need, where you’re located, and how often you’d like service. Our online form is the fastest way to start the conversation.</p>
          <div class="follow-card"><div><strong>Follow Number1</strong><span>Stay connected &amp; see our latest updates.</span></div><div class="social-row">
            <?php foreach ($socials as $key => $url): ?><a class="social-button <?php echo esc($key); ?>" href="<?php echo esc($url); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo ucfirst($key); ?>"><?php echo icon($key); ?></a><?php endforeach; ?>
          </div></div>
        </div>
        <div class="contact-card reveal"><div class="contact-card-top"><span>NUMBER1 CLEANING</span><span>AUSTIN • TX</span></div><div class="contact-card-number">01</div><h3>Request your personalized quote.</h3><p>Use our online form to tell us about your space, cleaning needs, and preferred schedule.</p><a class="btn btn-gold btn-full" href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Open Quote Form <span>→</span></a><p class="microcopy">You’ll be taken to our secure Typeform.</p></div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-top"><div><a href="#home" class="footer-brand"><img src="assets/logo.png" alt="Number1 Cleaning"></a><p class="footer-slogan">Clean Spaces. Happy Places.</p><p class="footer-copy">Professional care for the places where life happens.</p></div><div><h4>Explore</h4><a href="#services">Services</a><a href="#about">About Us</a><a href="#reviews">Reviews</a><a href="#areas">Areas We Serve</a><a href="#contact">Contact</a></div><div><h4>Follow Us</h4><div class="footer-social-grid"><?php foreach ($socials as $key => $url): ?><a href="<?php echo esc($url); ?>" target="_blank" rel="noopener noreferrer"><span class="footer-social-icon <?php echo esc($key); ?>"><?php echo icon($key); ?></span><span><?php echo ucfirst($key); ?></span><span>↗</span></a><?php endforeach; ?></div></div></div>
    <div class="container footer-bottom"><span>© <?php echo date('Y'); ?> Number1 Cleaning. All rights reserved.</span><span>Austin, TX &amp; surrounding communities</span></div>
  </footer>

  <a class="mobile-quote shine" href="<?php echo esc($quoteUrl); ?>" target="_blank" rel="noopener noreferrer">Request a Quote <span>↗</span></a>
  <script src="assets/js/main.js"></script>
</body>
</html>
