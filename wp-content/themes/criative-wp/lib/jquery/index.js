jQuery(document).ready(function(){

	// checkY();

	$('#planet-our').mouseenter(function(){
		$('#planet-web').addClass('planet-web-pos')
		$('#planet-graphic').addClass('planet-graphic-pos')
		$('#planet-photo').addClass('planet-photo-pos')
	});
	$('#planet-web').mouseleave(function(){
		$(this).removeClass('planet-web-pos')
	});
	
	$('#planet-graphic').mouseleave(function(){
		$(this).removeClass('planet-graphic-pos')
	});
	
	$('#planet-photo').mouseleave(function(){
		$(this).removeClass('planet-photo-pos')
	});

	$(window).bind('scroll', function() {
	    if ($(window).scrollTop() > $('#homepage').height()) {
	        // $('#homepage-1').fadeOut('fast');
	        $('#homepage-1').find('.content-wrapper').fadeOut();
	    }
	    else {
	        $('#homepage-1').find('.content-wrapper').fadeIn();
	    }
	});

	$('#w-col-1').hover(function(){
		$('.web-wrapper').fadeOut(350);
		$('.shape-triangle').fadeIn(350);
		$('#triangle-text').fadeOut(350);
	}, function(){
		$('.web-wrapper').fadeIn(350);
		$('.shape-triangle').fadeOut(350);
		$('#triangle-text').fadeIn(350);
	});

	$('#w-col-2').hover(function(){
		$('.graphic-wrapper').fadeOut(350);
		$('.shape-stripe').fadeIn(350);
		$('#stripe-text').fadeOut(350);
	}, function(){
		$('.graphic-wrapper').fadeIn(350);
		$('.shape-stripe').fadeOut(350);
		$('#stripe-text').fadeIn(350);
	});

	$('#w-col-3').hover(function(){
		$('.app-wrapper').fadeOut(350);
		$('.shape-circle').fadeIn(350);
		$('#circle-text').fadeOut(350);
	}, function(){
		$('.app-wrapper').fadeIn(350);
		$('.shape-circle').fadeOut(350);
		$('#circle-text').fadeIn(350);
	});

	$('.port-triangle-wrapper').hover(function(){
		$(this).find('.port-triangle-logo').fadeOut(350);	
	},function(){
		$(this).find('.port-triangle-logo').fadeIn(350);
	});

	$('.port-triangle-wrapper').click(function(){
		$('.modal-wrapper').fadeIn(150);
	});
	$('.modal-bg, .modal-close').click(function(){
		$('.modal-wrapper').fadeOut(150);
	});	
});