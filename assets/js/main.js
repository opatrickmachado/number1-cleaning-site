const header = document.getElementById('siteHeader');
const menuToggle = document.querySelector('.menu-toggle');
const mainNav = document.getElementById('mainNav');

const setHeaderState = () => header?.classList.toggle('scrolled', window.scrollY > 12);
setHeaderState();
window.addEventListener('scroll', setHeaderState, { passive: true });

if (menuToggle && mainNav) {
  menuToggle.addEventListener('click', () => {
    const open = mainNav.classList.toggle('open');
    menuToggle.setAttribute('aria-expanded', String(open));
    menuToggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    document.body.classList.toggle('nav-open', open);
  });
  mainNav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    mainNav.classList.remove('open');
    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.setAttribute('aria-label', 'Open navigation');
    document.body.classList.remove('nav-open');
  }));
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach((el, index) => {
  el.style.transitionDelay = `${Math.min(index * 30, 180)}ms`;
  observer.observe(el);
});

const reviewsRoot = document.querySelector('[data-reviews-root]');
if (reviewsRoot) {
  const track = reviewsRoot.querySelector('[data-reviews-track]');
  const dots = reviewsRoot.querySelector('[data-review-dots]');
  const prev = reviewsRoot.querySelector('[data-review-prev]');
  const next = reviewsRoot.querySelector('[data-review-next]');
  const rating = reviewsRoot.querySelector('[data-rating]');
  const reviewCount = reviewsRoot.querySelector('[data-review-count]');
  let reviews = [];
  let index = 0;
  let timer = null;

  const formatDate = (value) => {
    if (!value) return '';
    const d = new Date(value);
    if (Number.isNaN(d.getTime())) return '';
    return new Intl.DateTimeFormat('en-US', { month: 'short', year: 'numeric' }).format(d);
  };

  const renderDots = () => {
    dots.innerHTML = '';
    const total = Math.max(1, Math.ceil(reviews.length / (window.innerWidth <= 780 ? 1 : 2)));
    for (let i = 0; i < total; i++) {
      const b = document.createElement('button');
      b.type = 'button';
      b.className = i === index ? 'active' : '';
      b.setAttribute('aria-label', `Show review group ${i + 1}`);
      b.addEventListener('click', () => { index = i; updateTrack(); restartTimer(); });
      dots.appendChild(b);
    }
  };

  const updateTrack = () => {
    if (!reviews.length) return;
    const step = window.innerWidth <= 780 ? 100 : 50;
    track.style.transform = `translateX(-${index * step}%)`;
    [...dots.children].forEach((dot, i) => dot.classList.toggle('active', i === index));
  };

  const restartTimer = () => {
    clearInterval(timer);
    if (reviews.length > 1 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      timer = setInterval(() => {
        const total = Math.ceil(reviews.length / (window.innerWidth <= 780 ? 1 : 2));
        index = (index + 1) % Math.max(total, 1);
        updateTrack();
      }, 6000);
    }
  };

  prev?.addEventListener('click', () => {
    if (!reviews.length) return;
    const total = Math.ceil(reviews.length / (window.innerWidth <= 780 ? 1 : 2));
    index = (index - 1 + total) % total;
    updateTrack(); restartTimer();
  });
  next?.addEventListener('click', () => {
    if (!reviews.length) return;
    const total = Math.ceil(reviews.length / (window.innerWidth <= 780 ? 1 : 2));
    index = (index + 1) % total;
    updateTrack(); restartTimer();
  });

  const renderReviews = (payload) => {
    reviews = Array.isArray(payload.reviews) ? payload.reviews.filter(r => r && r.text) : [];
    if (payload.rating && rating) rating.textContent = Number(payload.rating).toFixed(1);
    if (payload.userRatingCount && reviewCount) reviewCount.textContent = payload.userRatingCount;
    if (!reviews.length) {
      renderDots();
      return;
    }
    track.innerHTML = reviews.map(review => `
      <article class="review-card-live">
        <span class="quote-mark">“</span>
        <p>${escapeHtml(review.text)}</p>
        <div class="review-author">
          <span class="author-dot">${escapeHtml((review.author || 'G').slice(0,1).toUpperCase())}</span>
          <div><strong>${escapeHtml(review.author || 'Google customer')}</strong><small>Google review</small></div>
          <span class="review-date">${formatDate(review.publishTime)}</span>
        </div>
      </article>
    `).join('');
    index = 0;
    renderDots();
    updateTrack();
    restartTimer();
  };

  fetch('api/reviews.php', { headers: { 'Accept': 'application/json' } })
    .then(response => response.ok ? response.json() : Promise.reject(new Error('Review API unavailable')))
    .then(renderReviews)
    .catch(() => {
      // Keep the verified aggregate snapshot visible instead of inventing review text.
      renderDots();
    });

  window.addEventListener('resize', () => { if (reviews.length) { renderDots(); updateTrack(); } });
}

function escapeHtml(value) {
  return String(value).replace(/[&<>'"]/g, char => ({'&':'&amp;','<':'&lt;','>':'&gt;',"'":'&#039;','"':'&quot;'}[char]));
}
