(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		var full = $('.owl-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:5
				},
				1000:{
					items:5
				}
			}
		});
		
		if( $(window).width() <= 1366 ){
			$("#banner .align a").html("Assistir");
		}
		
	});
	
})(jQuery, this);
