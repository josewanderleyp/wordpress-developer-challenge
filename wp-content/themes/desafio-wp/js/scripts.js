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

		$(".single .video .iframe .frame .play").on("click", function(e){
			e.preventDefault();
			// console.log('aqui');
			var iframe = $(this).closest(".video").find("iframe").attr("src");
			$(this).closest(".video").find("iframe").attr("src", iframe+"?autoplay=1");

			setTimeout(() => {
				$(this).closest(".video").addClass('remove');			
			}, 1000);
			console.log(iframe);
		});
		
	});
	
})(jQuery, this);
