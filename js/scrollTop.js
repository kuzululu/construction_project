$(document).ready(function(){
	// for selection window scrolltop
	$(window).scroll(function(){
		if ($(this).scrollTop() > 10) {
			$("#btnScrollToTop").fadeIn();
		}else{
			$("#btnScrollToTop").fadeOut();
		}
	});

	$("#btnScrollToTop").click(function(){
		$("html, body").animate({
			scrollTop: 0
		});
	});
});