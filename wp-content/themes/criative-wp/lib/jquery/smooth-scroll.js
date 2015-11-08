// ------------------------------
// http://twitter.com/mattsince87
// ------------------------------

$(document).ready(function(){		
	$('.nav a').click(function(){  
	    //Toggle Class
	    $(".active").removeClass("active");      
	    $(this).closest('li').addClass("active");
	    var theClass = $(this).attr("class");
	    $('.'+theClass).parent('li').addClass('active');
	    //Animate
	    $('html, body').stop().animate({
	        scrollTop: $( $(this).attr('href') ).offset().top - 0
	    }, 400);
	    return false;
	});
	
	$('.scrollTop a').scrollTop();

	$('#homepage a').click(function(){  
	    //Toggle Class
	    $(".active").removeClass("active");      
	    $(this).closest('li').addClass("active");
	    var theClass = $(this).attr("class");
	    $('.'+theClass).parent('li').addClass('active');
	    //Animate
	    $('html, body').stop().animate({
	        scrollTop: $( $(this).attr('href') ).offset().top - 0
	    }, 400);
	    return false;
	});
	$('.scrollTop a').scrollTop();

	$('.navbar-brand').click(function(){  
	    //Toggle Class
	    $(".active").removeClass("active");      
	    $(this).closest('li').addClass("active");
	    var theClass = $(this).attr("class");
	    $('.'+theClass).parent('li').addClass('active');
	    //Animate
	    $('html, body').stop().animate({
	        scrollTop: $( $(this).attr('href') ).offset().top - 0
	    }, 400);
	    return false;
	});
	$('.scrollTop a').scrollTop();
});