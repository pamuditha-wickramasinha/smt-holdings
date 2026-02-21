/**
 * Loading overlay – hides the preloader when the page is ready.
 * Uses vanilla JS so it does not depend on jQuery or load order.
 * Part of theme bundle (theme.js).
 */
(function () {
  'use strict';

  var LOADING_SELECTOR = '.loading-area';
  var FADEOUT_DURATION_MS = 500;
  var FALLBACK_DELAY_MS = 800;

  function hideLoading() {
    var el = document.querySelector(LOADING_SELECTOR);
    if (!el) return;

    el.style.transition = 'opacity ' + (FADEOUT_DURATION_MS / 1000) + 's ease';
    el.style.opacity = '0';

    setTimeout(function () {
      el.style.display = 'none';
    }, FADEOUT_DURATION_MS);
  }

  function init() {
    if (document.readyState === 'complete') {
      hideLoading();
    } else {
      window.addEventListener('load', hideLoading);
      document.addEventListener('DOMContentLoaded', function () {
        setTimeout(hideLoading, FALLBACK_DELAY_MS);
      });
    }
  }

  init();
})();
