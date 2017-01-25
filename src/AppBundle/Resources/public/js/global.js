$(document).ready(function(){

// HOMEPAGE

	loadSlider();

// ENDHOMEPAGE

});

function loadSlider(){

	$('#bxslider-mobile').bxSlider({
		controls: false,
		auto: true,
		speed: 300,
		onSliderLoad: function(params) {
			$('ul#bxslider-mobile').parent().parent('.bx-wrapper').addClass('hidden-sm hidden-md hidden-lg');
		}
	});

	$('#bxslider-tablette').bxSlider({
		controls: false,
		auto: true,
		speed: 300,
		onSliderLoad: function(params) {
			$('ul#bxslider-tablette').parent().parent('.bx-wrapper').addClass('hidden-xs hidden-lg');
		}
	});

	$('#bxslider-desktop').bxSlider({
		controls: false,
		auto: true,
		speed: 300,
		onSliderLoad: function(params) {
			$('ul#bxslider-desktop').parent().parent('.bx-wrapper').addClass('hidden-xs hidden-sm hidden-md');
		}
	});

}


