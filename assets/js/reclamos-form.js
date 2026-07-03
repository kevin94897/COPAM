/**
 * Libro de Reclamaciones multi-step form: step navigation/validation
 * (ported from src/components/Contacto.astro's inline script) plus the
 * real submission flow (new — the Astro version only called
 * preventDefault() and went nowhere). On success/error the page reloads
 * with ?reclamo=ok|error (set by inc/reclamos-mail.php's redirect); this
 * script shows the matching banner on load.
 */
document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('reclamos-form');
  var formSteps = document.querySelectorAll('.form-step');
  var btnNext = document.getElementById('btn-next');
  var btnPrev = document.getElementById('btn-prev');
  var btnSubmit = document.getElementById('btn-submit');

  if (!form || !formSteps.length) return;

  var totalSteps = formSteps.length;
  var currentStep = 1;

  function validateCurrentStep() {
    var currentStepEl = document.querySelector('.form-step[data-step="' + currentStep + '"]');
    if (!currentStepEl) return true;
    var invalidField = currentStepEl.querySelector(':invalid');
    if (invalidField) {
      invalidField.reportValidity();
      return false;
    }
    return true;
  }

  function updateForm() {
    formSteps.forEach(function (step) {
      step.style.display = 'none';
    });

    var currentStepEl = document.querySelector('.form-step[data-step="' + currentStep + '"]');
    if (currentStepEl) currentStepEl.style.display = 'flex';

    if (currentStep === 1) {
      if (btnPrev) btnPrev.style.display = 'none';
      if (btnNext) btnNext.style.display = 'flex';
      if (btnSubmit) btnSubmit.style.display = 'none';
    } else if (currentStep === totalSteps) {
      if (btnPrev) btnPrev.style.display = 'flex';
      if (btnNext) btnNext.style.display = 'none';
      if (btnSubmit) btnSubmit.style.display = 'flex';
    } else {
      if (btnPrev) btnPrev.style.display = 'flex';
      if (btnNext) btnNext.style.display = 'flex';
      if (btnSubmit) btnSubmit.style.display = 'none';
    }
  }

  if (btnNext) {
    btnNext.addEventListener('click', function () {
      if (!validateCurrentStep()) return;
      if (currentStep < totalSteps) {
        currentStep++;
        updateForm();
      }
    });
  }

  if (btnPrev) {
    btnPrev.addEventListener('click', function () {
      if (currentStep > 1) {
        currentStep--;
        updateForm();
      }
    });
  }

  // Only block the real POST submission when the last step is invalid;
  // otherwise let the form submit normally to admin-post.php.
  form.addEventListener('submit', function (e) {
    if (!validateCurrentStep()) {
      e.preventDefault();
    }
  });

  updateForm();

  // ── Success/error banner from the ?reclamo= redirect ─────────────
  var params = new URLSearchParams(window.location.search);
  var status = params.get('reclamo');
  if (status === 'ok' || status === 'error') {
    var banner = document.getElementById('reclamo-banner-' + status);
    if (banner) {
      banner.classList.add('is-visible');
      banner.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    if (status === 'ok') {
      form.reset();
      currentStep = 1;
      updateForm();
    }
    params.delete('reclamo');
    var newSearch = params.toString();
    var newUrl = window.location.pathname + (newSearch ? '?' + newSearch : '') + window.location.hash;
    window.history.replaceState({}, '', newUrl);
  }
});
