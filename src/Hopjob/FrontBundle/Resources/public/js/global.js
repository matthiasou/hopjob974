$(document).ready(function(){

// HOMEPAGE

	loadSlider();

// ENDHOMEPAGE

	$('.hide-black-background').click(function(){
		$('.black-background').fadeOut();
		$('.modal-register-success').fadeOut();
	});

// NAV

    var showHeaderAt = 150;

    var win = $(window),
            body = $('body');

    // Show the fixed header only on larger screen devices

    if(win.width() > 600){

        // When we scroll more than 150px down, we set the
        // "fixed" class on the body element.

        win.on('scroll', function(e){

            if(win.scrollTop() > showHeaderAt) {
                body.addClass('fixed');
            }
            else {
                body.removeClass('fixed');
            }
        });

    }
// FIN NAV

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

	$('body').on('change', ".domaines", function() {
		var id = $(".domaines option:selected").attr("id");
		id = id.replace( "domaine", '');
		console.log(id);
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
		console.log(id);
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


