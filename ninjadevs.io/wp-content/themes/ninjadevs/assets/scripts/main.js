/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  var UTIL = {};

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {

      },
      finalize: function() {

      }
    },
    // Home page
    'home': {
      init: function() {

        var EQColumnsSelectors = [
          '.home .card-post .card-block',
          '.home .card-post .post-meta'
        ];

        UTIL.AttachEQColumns(EQColumnsSelectors);

      },
      finalize: function() {

      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {

      },
      finalize: function () {
        
      }
    },
    'archive': {
      init: function() {

        var EQColumnsSelectors = [
          '.category .card-post .card-block',
          '.category .card-post .post-meta'
        ];

        UTIL.AttachEQColumns(EQColumnsSelectors);

      },
      finalize: function () {
        
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    },
    EQcolumns: function(selector) {

      var maxHeight = 0,
        elements = $(selector);

      $.each(elements, function(index, el) {

        var curHeight = $(el).outerHeight();

        if (curHeight > maxHeight) {

          maxHeight = curHeight;

        }

      });

      elements.css('min-height', maxHeight + 'px');

    },
    AttachEQColumns: function(selectors) {

      $.each(selectors, function(index, selector) {

        UTIL.EQcolumns(selector);

        $(window).resize(function () {
          $(selector).removeAttr('style');
          UTIL.EQcolumns(selector);
        });

      });

    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
