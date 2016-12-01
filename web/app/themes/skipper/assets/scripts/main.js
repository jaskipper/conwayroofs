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

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        function topOffset() {
            myoffset = $('#wpadminbar').height();
            navbarheight = $('.navbar').height();
            $('.navbar-fixed-top').css('top', myoffset + 'px');
            $('#conwaylogo').css('margin-top', navbarheight + 30 + 'px');
        }
        function phoneAlign() {
          iconsize = $('.calltoday').height();
          realiconsize = iconsize * 0.6;
          $('.phone').css('line-height', realiconsize + 'px');
        }
        $(document).ready(function () {
          topOffset();
        });
        $(window).on('load', function() {
          phoneAlign();
        });
        $(window).resize(function(){
          topOffset();
          phoneAlign();
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        $(document).ready(function () {

          /*$(window).bind('resizeEnd', function () {
            var height = window.innerHeight ? window.innerHeight : $(window).height();
            windowheight = height - $(".logged-in #wpadminbar").height();
            $("#landing").height(windowheight);
          });

          $(window).resize(function () {
            if (this.resizeTO) { clearTimeout(this.resizeTO); }
            this.resizeTO = setTimeout(function () {
              $(this).trigger('resizeEnd');
            }, 300);
          }).trigger("resize");*/
          if (Modernizr.cssvhunit) {
            // supported
          } else {
              $("landing").height( $(window).height() );
          }

        }); //Document Ready


      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
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
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
