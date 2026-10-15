const replaceIconText = () => {
  document.querySelectorAll('a, button').forEach(element => {
    if (element.innerHTML.includes('→')) element.innerHTML = element.innerHTML.replaceAll('→', '<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>');
    if (element.innerHTML.includes('↓')) element.innerHTML = element.innerHTML.replaceAll('↓', '<i class="fa-solid fa-chevron-down" aria-hidden="true"></i>');
  });
  document.querySelectorAll('.stars').forEach(stars => { stars.innerHTML = '<i class="fa-solid fa-star"></i>'.repeat(5); });
  document.querySelectorAll('.hero-points span').forEach((item, index) => {
    const labels = ['fa-shield-halved', 'fa-calendar-check', 'fa-location-dot', 'fa-shield-heart'];
    const text = item.textContent.replace(/^[◈▣⌖♢]\s*/, '');
    item.innerHTML = `<i class="fa-solid ${labels[index] || 'fa-circle-check'}" aria-hidden="true"></i><b>${text}</b>`;
  });
};
replaceIconText();
document.querySelector('.hero-points')?.remove();
const awardMarquee = document.querySelector('.home-award-marquee');
if (awardMarquee) {
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  const syncAwardMarqueeMotion = () => {
    const shouldAnimate = !reducedMotion.matches;
    awardMarquee.classList.toggle('is-running', shouldAnimate);
  };
  syncAwardMarqueeMotion();
  reducedMotion.addEventListener?.('change', syncAwardMarqueeMotion);
}
const serviceGrid = document.querySelector('#serviceGrid');
document.querySelector('.service-load-more')?.addEventListener('click', function () {
  serviceGrid?.querySelectorAll('.service-grid-item-hidden').forEach(item => item.classList.remove('service-grid-item-hidden'));
  this.closest('.service-load-more-wrap')?.remove();
});

const syncComparisonImages = (root = document) => root.querySelectorAll('.comparison').forEach(compare => {
  const before = compare.querySelector('.comparison-before img');
  if (before) before.style.width = `${compare.clientWidth}px`;
});
document.addEventListener('input', event => {
  if (event.target.classList.contains('comparison-range')) {
    event.target.closest('.comparison')?.style.setProperty('--split', `${event.target.value}%`);
  }
});
window.addEventListener('resize', () => syncComparisonImages());
window.addEventListener('load', () => syncComparisonImages(), { once: true });

const reviewRow = document.querySelector('.reviews-strip .row');
const reviewsCarousel = document.querySelector('.reviews-carousel');
if (reviewRow && reviewsCarousel && window.jQuery?.fn?.owlCarousel) {
  reviewsCarousel.classList.remove('owl-fallback');
  const reviewsOwl = window.jQuery(reviewsCarousel).owlCarousel({
    items: 3,
    loop: true, autoplay: true, autoplayTimeout: 4500, autoplayHoverPause: true,
    smartSpeed: 700, dots: true, nav: false, margin: 14,
    checkVisibility: false, responsiveRefreshRate: 100, responsiveBaseElement: window,
    responsive: { 0: { items: 1 }, 576: { items: 2 }, 992: { items: 3 } }
  });
  const refreshReviews = () => reviewsOwl.trigger('refresh.owl.carousel');
  window.addEventListener('load', refreshReviews, { once: true });
  let reviewResizeTimer;
  window.addEventListener('resize', () => {
    window.clearTimeout(reviewResizeTimer);
    reviewResizeTimer = window.setTimeout(refreshReviews, 160);
  });
}

document.querySelector('#quoteForm')?.addEventListener('submit', function (event) {
  event.preventDefault();
  const status = this.querySelector('.form-status');
  status.textContent = ' Thanks — we will be in touch shortly.';
  this.querySelector('button').disabled = true;
});

const headerContact = document.querySelector('.topbar .container > div');
if (headerContact) {
  headerContact.querySelectorAll('a:nth-child(-n+2)').forEach(link => link.remove());
  headerContact.insertAdjacentHTML('beforeend', '<a href="tel:02920090155"><i class="fa-solid fa-phone" aria-hidden="true"></i> Cardiff: 02920 090155</a><a href="tel:01633479030"><i class="fa-solid fa-phone" aria-hidden="true"></i> Newport: 01633 479030</a>');
}
const headerBar = document.querySelector('.topbar .container');
if (headerBar) {
  headerBar.querySelector('.header-location')?.remove();
}
const navDrawer = document.querySelector('#siteNav');
const navToggle = document.querySelector('.navbar-toggler');
const siteNavbar = navDrawer?.closest('.navbar');
const navContainer = siteNavbar?.querySelector('.container');
const navMobile = window.matchMedia('(max-width: 991.98px)');
let navDrawerScrollY = 0;
const navDrawerHome = document.createComment('Responsive navigation position');
navDrawer?.before(navDrawerHome);
const placeNavDrawer = () => {
  if (!navDrawer) return;
  if (navMobile.matches) document.body.appendChild(navDrawer);
  else {
    navDrawerHome.after(navDrawer);
    navDrawer.style.removeProperty('--nav-container-left');
    navDrawer.style.removeProperty('--nav-container-width');
  }
};
const syncNavDrawerTop = () => {
  if (!navDrawer || !siteNavbar || !navMobile.matches) return;
  const headerBottom = Math.max(0, siteNavbar.getBoundingClientRect().bottom);
  navDrawer.style.setProperty('--nav-drawer-top', `${headerBottom}px`);
  const containerBounds = navContainer?.getBoundingClientRect();
  if (containerBounds) {
    navDrawer.style.setProperty('--nav-container-left', `${Math.max(0, containerBounds.left)}px`);
    navDrawer.style.setProperty('--nav-container-width', `${containerBounds.width}px`);
  }
};
placeNavDrawer();
syncNavDrawerTop();
window.addEventListener('scroll', syncNavDrawerTop, { passive: true });
window.addEventListener('resize', syncNavDrawerTop);
window.visualViewport?.addEventListener('resize', syncNavDrawerTop);
if (siteNavbar && 'ResizeObserver' in window) {
  new ResizeObserver(syncNavDrawerTop).observe(siteNavbar);
}
navMobile.addEventListener('change', () => {
  window.bootstrap?.Offcanvas.getInstance(navDrawer)?.hide();
  placeNavDrawer();
  syncNavDrawerTop();
});
if (navDrawer && window.bootstrap?.Offcanvas) {
  window.bootstrap.Offcanvas.getOrCreateInstance(navDrawer, { backdrop: false, scroll: true });
}
navDrawer?.querySelector('.services-menu > .nav-link')?.addEventListener('click', event => {
  if (!navMobile.matches || !window.bootstrap?.Dropdown) return;
  event.preventDefault();
  event.stopPropagation();
  const dropdownToggle = navDrawer.querySelector('.services-menu-toggle');
  if (dropdownToggle) window.bootstrap.Dropdown.getOrCreateInstance(dropdownToggle).toggle();
});
navDrawer?.addEventListener('show.bs.offcanvas', () => {
  navDrawerScrollY = window.scrollY;
  syncNavDrawerTop();
  if (window.matchMedia('(max-width: 991.98px)').matches) {
    navDrawer.style.setProperty('display', 'flex', 'important');
    navDrawer.style.setProperty('visibility', 'visible', 'important');
    navDrawer.style.setProperty('transform', 'translate3d(0, 0, 0)', 'important');
    navDrawer.style.setProperty('z-index', '1060', 'important');
  }
  siteNavbar?.classList.add('nav-menu-open');
  navToggle?.classList.add('is-open');
  navToggle?.setAttribute('aria-expanded', 'true');
  navToggle?.setAttribute('aria-label', 'Close menu');
});
navDrawer?.addEventListener('hidden.bs.offcanvas', () => {
  siteNavbar?.classList.remove('nav-menu-open');
  navToggle?.classList.remove('is-open');
  navToggle?.setAttribute('aria-expanded', 'false');
  navToggle?.setAttribute('aria-label', 'Open menu');
  navDrawer.style.removeProperty('display');
  navDrawer.style.removeProperty('visibility');
  navDrawer.style.removeProperty('transform');
  navDrawer.style.removeProperty('z-index');
  navToggle?.focus({ preventScroll: true });
  window.scrollTo({ top: navDrawerScrollY, behavior: 'instant' });
});
navDrawer?.querySelectorAll('a[href^="#"]').forEach(link => link.addEventListener('click', () => {
  if (window.matchMedia('(max-width: 991.98px)').matches && window.bootstrap?.Offcanvas) {
    window.bootstrap.Offcanvas.getOrCreateInstance(navDrawer).hide();
  }
}));

const mainContent = document.querySelector('main');
if (mainContent) {
  ['services', 'about', 'gallery', 'areas', 'reviews', 'contact'].forEach(sectionId => {
    const section = document.getElementById(sectionId);
    if (section) mainContent.appendChild(section);
  });
}

const hero = document.querySelector('.hero .container');
const quoteSection = document.querySelector('.quote');
const quoteForm = document.querySelector('#quoteForm');
if (hero && quoteSection && quoteForm) {
  const heroForm = document.createElement('div');
  heroForm.className = 'hero-form';
  heroForm.innerHTML = '<p class="hero-form-eyebrow">Start your enquiry</p><h3>Need A Quick Quote?</h3><p class="hero-form-intro">Request a free, no-obligation quote or email us at info@splashcleancaerleon.co.uk for driveway cleaning, patio restoration or soft washing today. A specialist will reply promptly with clear advice and pricing.</p>';
  heroForm.appendChild(quoteForm);
  hero.appendChild(heroForm);
  quoteSection.remove();
}

setTimeout(() => {
  const carousel = document.querySelector('.reviews-carousel');
  const slides = carousel ? [...carousel.querySelectorAll('.review-slide')] : [];
  if (!carousel || carousel.classList.contains('owl-loaded') || !slides.length) return;
  carousel.classList.add('owl-fallback');
  let start = 0;
  const showFallback = () => slides.forEach((slide, index) => slide.classList.toggle('review-visible', index >= start && index < start + 3));
  showFallback();
  setInterval(() => { start = (start + 3) % slides.length; showFallback(); }, 4500);
}, 2200);

const pageLoader = document.querySelector('#pageLoader');
if (pageLoader) {
  let pageLoaderDismissed = false;
  const dismissPageLoader = () => {
    if (pageLoaderDismissed) return;
    pageLoaderDismissed = true;
    pageLoader.classList.add('is-hidden');
    window.setTimeout(() => pageLoader.remove(), 350);
  };
  if (document.readyState === 'complete') dismissPageLoader();
  else window.addEventListener('load', dismissPageLoader, { once: true });
  window.setTimeout(dismissPageLoader, 5000);
}

const heroSection = document.querySelector('.hero');
if (heroSection && !window.location.pathname.toLowerCase().endsWith('/about.php') && !document.querySelector('#which-recommended')) {
  const whichSection = document.createElement('section');
  whichSection.className = 'which-recommended section-pad';
  whichSection.id = 'which-recommended';
  whichSection.innerHTML = '<div class="container"><div class="section-title"><p>Trusted recognition</p><h2>We Are Recommended By <span>Which?</span></h2><small>See what customers are saying about Splash Clean Caerleon on our Which? Trusted Traders profile.</small></div><div class="which-widget"><iframe style="border:1px #FFFFFF none" src="https://trustedtraders.which.co.uk/widgets/businesses/splash-clean-caerleon/reviews" title="Which? Trusted Traders reviews" width="100%" height="600px" scrolling="no" frameborder="no" allow="fullscreen"></iframe></div></div>';
  const reviewsSection = document.querySelector('#reviews');
  const servicesSection = document.querySelector('#services');
  if (reviewsSection) reviewsSection.insertAdjacentElement('beforebegin', whichSection);
  else (servicesSection || heroSection).insertAdjacentElement('afterend', whichSection);
  const whichStyles = document.createElement('style');
  whichStyles.textContent = '.which-recommended{background:#f7faff}.which-recommended .section-title{margin-bottom:30px}.which-recommended .section-title h2 span{color:var(--blue)}.which-widget{overflow:hidden;border:1px solid #dce5f2;border-radius:10px;background:#fff;box-shadow:0 10px 28px rgba(5,26,55,.08)}.which-widget iframe{display:block;width:100%;max-width:100%;border:0}@media(max-width:767px){.which-recommended .section-title h2{font-size:34px}.which-widget iframe{height:600px}}';
  document.head.appendChild(whichStyles);
}
// Premium interaction layer: reveal sections as they enter the viewport and add a subtle pointer lift to key cards.
const revealTargets = document.querySelectorAll('main section, .service-card, .comparison-card, .areas-card, .awards-panel');
revealTargets.forEach((element, index) => {
  element.classList.add('premium-reveal');
  element.style.setProperty('--reveal-delay', `${Math.min(index % 6, 5) * 55}ms`);
});
const revealObserver = 'IntersectionObserver' in window ? new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    entry.target.classList.add('is-visible');
    observer.unobserve(entry.target);
  });
}, { threshold: 0.12 }) : null;
if (revealObserver) revealTargets.forEach(element => revealObserver.observe(element));
else revealTargets.forEach(element => element.classList.add('is-visible'));

document.querySelectorAll('.service-card, .areas-card, .awards-panel').forEach(card => {
  card.addEventListener('pointermove', event => {
    if (window.matchMedia('(hover: none)').matches) return;
    const box = card.getBoundingClientRect();
    const rotateX = ((event.clientY - box.top) / box.height - .5) * -2.5;
    const rotateY = ((event.clientX - box.left) / box.width - .5) * 2.5;
    card.style.transform = `translateY(-6px) perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });
  card.addEventListener('pointerleave', () => { card.style.transform = ''; });
});
