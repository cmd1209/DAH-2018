(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		var owl = $('.owl-carousel');
		owl.owlCarousel({
		    items:1,
		    loop:true,
		    margin:10,
		    autoplay:true,
				animateOut: 'fadeOut',
		    autoplayTimeout:4000,
		    autoplayHoverPause:true,
				dots: false,
		});
	
		var hoveritem = $(".linkblock");
		var newsheadline = $(".newsheadline");
		var newsexcerpt = $("h5.excerpt");

		$(".flexitem").mouseover(function() {
  		$(this).find("h5.excerpt").slideDown("fast");
		});
		$(".flexitem").mouseleave(function() {
  		$(this).find("h5.excerpt").slideUp( "fast" );
		});

		var $window = $(window);
		var prev = 0;
		var scrollheader = $(".scrollheader");

		$window.on('scroll', function(){
  		var scrollTop = $window.scrollTop();
  		scrollheader.toggleClass('headdown', scrollTop > prev);
  		prev = scrollTop;
		});


	});
	
})(jQuery, this);
