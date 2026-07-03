/**
 * Site-wide behavior, consolidated from src/components/Scripts.astro and
 * the inline <script> in src/components/Header.astro. TypeScript casts
 * stripped; the dead #contact-form/#contact-submit fake-submit block from
 * the original Scripts.astro is dropped (superseded by reclamos-form.js).
 */
document.addEventListener('DOMContentLoaded', function () {
  // ── Mobile menu toggle ──────────────────────────────
  var toggleBtn = document.getElementById('menu-toggle');
  var navMenu = document.getElementById('main-nav');

  if (toggleBtn && navMenu) {
    toggleBtn.addEventListener('click', function () {
      navMenu.classList.toggle('hidden');
    });

    navMenu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        navMenu.classList.add('hidden');
      });
    });
  }

  // ── Reveal on scroll ─────────────────────────────────
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -32px 0px' });

  document.querySelectorAll('[data-reveal]').forEach(function (el) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(22px)';
    el.style.transition = el.style.transition || 'opacity 0.65s ease, transform 0.65s ease';
    observer.observe(el);
  });

  setTimeout(function () {
    document.querySelectorAll('[data-reveal]').forEach(function (el) {
      if (el.style.opacity === '0') {
        var r = el.getBoundingClientRect();
        if (r.top < window.innerHeight && r.bottom > 0) {
          el.style.opacity = '1';
          el.style.transform = 'translateY(0)';
          observer.unobserve(el);
        }
      }
    });
  }, 50);

  // ── Header shadow on scroll ──────────────────────────
  var header = document.getElementById('main-header');
  if (header) {
    var onScroll = function () {
      header.style.boxShadow = window.scrollY > 24
        ? '0 2px 20px rgba(0,0,0,0.13)'
        : '0 1px 4px rgba(0,0,0,0.05)';
    };
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  // ── Nav active state on scroll ───────────────────────
  var navLinks = document.querySelectorAll('#main-nav a[href^="#"]');
  var sections = Array.prototype.slice.call(navLinks).map(function (a) {
    return document.querySelector(a.getAttribute('href'));
  }).filter(Boolean);

  var setActive = function (id) {
    navLinks.forEach(function (a) {
      var isActive = a.getAttribute('href') === '#' + id;
      a.style.background = isActive ? '#1C5E35' : '';
      a.style.color = isActive ? 'white' : '#4A5240';
      a.style.fontWeight = isActive ? '600' : '500';
    });
  };

  var sectionObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) setActive(entry.target.id);
    });
  }, { threshold: 0.25, rootMargin: '-60px 0px -40% 0px' });

  sections.forEach(function (s) { sectionObserver.observe(s); });

  // ── Nav hover states ──────────────────────────────────
  document.querySelectorAll('#main-nav a').forEach(function (a) {
    a.addEventListener('mouseenter', function () {
      if (a.style.background !== 'rgb(28, 94, 53)') {
        a.style.background = '#F0EDE6';
        a.style.color = '#1C2118';
      }
    });
    a.addEventListener('mouseleave', function () {
      if (a.style.background !== 'rgb(28, 94, 53)') {
        a.style.background = '';
        a.style.color = '#4A5240';
      }
    });
  });

  // Tracking button hover
  var trackBtn = document.getElementById('header-tracking-btn');
  if (trackBtn) {
    trackBtn.addEventListener('mouseenter', function () { trackBtn.style.background = '#9B3D18'; });
    trackBtn.addEventListener('mouseleave', function () { trackBtn.style.background = '#B34A20'; });
  }

  // ── Cookie banner ─────────────────────────────────────
  var banner = document.getElementById('cookie-banner');
  if (banner && !localStorage.getItem('copam_cookies')) {
    setTimeout(function () { banner.style.display = 'block'; }, 1200);
  }
  ['cookie-accept', 'cookie-reject'].forEach(function (id) {
    var btn = document.getElementById(id);
    if (btn) {
      btn.addEventListener('click', function () {
        localStorage.setItem('copam_cookies', id === 'cookie-accept' ? 'all' : 'essential');
        if (banner) banner.style.display = 'none';
      });
    }
  });
});
