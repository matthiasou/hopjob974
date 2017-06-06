$(document).ready(function(){

// HOMEPAGE

	loadSlider();

// ENDHOMEPAGE

$('.hide-black-background').click(function(){
	$('.black-background').fadeOut();
	$('.modal-register-success').fadeOut();
});

});

function loadSlider(){

	$('#bxslider-mobile').bxSlider({
		controls: false,
		auto: true,
		onSliderLoad: function(params) {
			$('ul#bxslider-mobile').parent().parent('.bx-wrapper').addClass('hidden-sm hidden-md hidden-lg');
		}
	});

	$('#bxslider-tablette').bxSlider({
		controls: false,
		auto: true,
		onSliderLoad: function(params) {
			$('ul#bxslider-tablette').parent().parent('.bx-wrapper').addClass('hidden-xs hidden-lg');
		}
	});

	$('#bxslider-desktop').bxSlider({
		controls: false,
		auto: true,
		onSliderLoad: function(params) {
			$('ul#bxslider-desktop').parent().parent('.bx-wrapper').addClass('hidden-xs hidden-sm hidden-md');
		}
	});

	$('body').on('change', ".doms", function() {
		var id = $(".doms option:selected").attr("id");
		id = id.replace( "domaine", '');
		var btn = "nomDomaineChange";

		var request = $.ajax({
			type: 'POST',
			url: "http://localhost:8888/hopjob974/web/app_dev.php/annonces",
			data: {btn:btn ,val : id }
		});
		request.done(function(data) {
			$("#annonces").html(data).prepend('<input type="hidden" value="'+ id +'" name="domaineSelected"/>');

		});

	});	
	$('body').on('change', ".villes", function() {
		var id = $(".villes option:selected").attr("id");
		if (typeof $('input[name="domaineSelected"]').val() != "undefined"){
			var domaineSelected = true;
			var domaineId = $('input[name="domaineSelected"]').val();
		}else{
			var domaineSelected = false;
		}
		
		id = id.replace( "ville", '');
		var btn = "nomVilleChange";

		if (domaineSelected) {
			var request = $.ajax({
				type: 'POST',
				url: "http://localhost:8888/hopjob974/web/app_dev.php/annonces",
				data: {btn:btn ,val : id, domaineId : domaineId }
			});
			request.done(function(data) {
				$("#annonces").html(data);
			});
		}else{
			var request = $.ajax({
				type: 'POST',
				url: "http://localhost:8888/hopjob974/web/app_dev.php/annonces",
				data: {btn:btn ,val : id }
			});
			request.done(function(data) {
				$("#annonces").html(data);
			});
		}

		

	});	

}


