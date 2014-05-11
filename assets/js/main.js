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
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
	  $(".get-started-modal").click(function(){ 
	   		$("#getStarted").modal('toggle');
	   	});
    }
  },
  // Home page
  home: {
    init: function() {

             $(window).bind("scroll", function() {
	             if ($(this).scrollTop() > 520) {
		             $(".floating-demo").fadeIn();
		         } else {
			         $(".floating-demo").stop().fadeOut();
			     }
			 });     
    }
  },
  // Solutins page
  solutions: {
    init: function() {
      // JavaScript to be fired on the about us page
      	$('#slideshowModal-180').on('shown.bs.modal', function (e) {
			$('.slidecontainer-180').flexslider({
				animation: "slide",
				itemWidth: 900,
				slideshow: true,
				touch: true,
				keyboard: true
				
			});
			$('.slidecontainer-180').css({"opacity": "1"});
		})
		$('#slideshowModal-183').on('shown.bs.modal', function (e) {
			$('.slidecontainer-183').flexslider({
				animation: "slide",
				itemWidth: 900,
				slideshow: true,
				touch: true,
				keyboard: true
			});
			$('.slidecontainer-183').css({"opacity": "1"});
		})
		$('#slideshowModal-184').on('shown.bs.modal', function (e) {
			$('.slidecontainer-184').flexslider({
				animation: "slide",
				itemWidth: 900,
				slideshow: true,
				touch: true,
				keyboard: true
			});
			$('.slidecontainer-184').css({"opacity": "1"});
		})			
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
