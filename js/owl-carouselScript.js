$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoPlayHoverPause: true,
		center: true,
		navText:[
		 "<i class='fa-solid fa-chevron-left text-dark d-block'></i>",
		 "<i class='fa-solid fa-chevron-right text-dark d-block'></i>",
		],
		responsive:{
			0:{
				items: 1
			},
			600:{
				items: 1
			},
			1000:{
				items: 3
			}
		}
	});
});