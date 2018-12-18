$(document).ready(function(){
	// toggle menu mobile
	$('.menu-button').click(function(){
		$('#menu-mobile').fadeIn();
		$('#menu-container').animate({right:'0px'});
	});
	$('.close-button').click(function(){
		$('#menu-mobile').fadeOut();
		$('#menu-container').animate({right:'-100%'});
	});
});




$('.carousel').carousel({
	interval: false 
});
ScrollReveal().reveal('.headline', { duration: 600,distance: '50px'});

