$(document).ready(function(){

	var width = $(window).width();

	if (width < 768) {
		$('#bxslider-mobile').bxSlider({
			controls: false
		});
	}

	if (width >= 768 && width < 1200) {
		$('#bxslider-regular').bxSlider({
			controls: false
		});
	}

	if (width >= 1200) {
		$('#bxslider-desktop').bxSlider({
			controls: false,
			infiniteLoop: true,
			speed: 100
		});
	}

});