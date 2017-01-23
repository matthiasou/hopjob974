$(document).ready(function(){

	var width = $(window).width();

	if (width <= 768) {
		$('#bxslider-mobile').bxSlider({
			controls:false
		});
	}

	if (width > 768 && width < 1240) {
		$('#bxslider-regular').bxSlider({
			controls:false
		});
	}

	if (width > 1240) {
		$('#bxslider-desktop').bxSlider({
			controls:false
		});
	}

});