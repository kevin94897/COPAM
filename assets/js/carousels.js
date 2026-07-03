/**
 * Embla carousel init (Servicios) plus tab switching for the Regulatorio
 * section's document groups. Embla's window.EmblaCarousel is exposed by
 * embla-carousel.min.js (loaded before this file).
 */
document.addEventListener('DOMContentLoaded', function () {
  function initCarousel(sectionSelector, prefix) {
    var viewport = document.querySelector(sectionSelector + ' .' + prefix + '-embla');
    if (!viewport || typeof window.EmblaCarousel === 'undefined') return;

    var embla = window.EmblaCarousel(viewport, { loop: false, align: 'start', dragFree: false });

    var prevBtn = document.querySelector(sectionSelector + ' .' + prefix + '-prev');
    var nextBtn = document.querySelector(sectionSelector + ' .' + prefix + '-next');
    var dotsContainer = document.querySelector(sectionSelector + ' .' + prefix + '-dots');

    if (prevBtn) prevBtn.addEventListener('click', function () { embla.scrollPrev(); });
    if (nextBtn) nextBtn.addEventListener('click', function () { embla.scrollNext(); });

    var dots = embla.scrollSnapList().map(function (_, index) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = prefix + '-dots__dot';
      dot.setAttribute('aria-label', 'Ir al grupo ' + (index + 1));
      dot.addEventListener('click', function () { embla.scrollTo(index); });
      if (dotsContainer) dotsContainer.appendChild(dot);
      return dot;
    });

    var updateState = function () {
      dots.forEach(function (dot, index) {
        dot.classList.toggle('is-selected', index === embla.selectedScrollSnap());
      });
      if (prevBtn) prevBtn.toggleAttribute('disabled', !embla.canScrollPrev());
      if (nextBtn) nextBtn.toggleAttribute('disabled', !embla.canScrollNext());
    };

    embla.on('select', updateState);
    embla.on('reInit', updateState);
    updateState();
  }

  initCarousel('#servicios', 'svc');

  document.querySelectorAll('.reg-tabs').forEach(function (tabs) {
    var buttons = tabs.querySelectorAll('.reg-tabs__btn');
    var panels = tabs.querySelectorAll('.reg-tabs__panel');

    buttons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var target = btn.getAttribute('data-tab');

        buttons.forEach(function (b) {
          b.classList.toggle('is-active', b === btn);
          b.setAttribute('aria-selected', b === btn ? 'true' : 'false');
        });

        panels.forEach(function (panel) {
          var isTarget = panel.getAttribute('data-panel') === target;
          panel.classList.toggle('is-active', isTarget);
          panel.toggleAttribute('hidden', !isTarget);
        });
      });
    });
  });
});
