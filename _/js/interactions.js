$(document).ready(function() {
    
    $('#contact-button').click(function(){
	   $('#contact-menu').toggleClass("is-hidden"); 
    });
    
    $('#about-button').click(function(){
	   $('#about-menu').toggleClass("is-hidden"); 
    });
    
    $('.navbar-toggle').click(function(){
	   $('nav').toggleClass("mobile-hidden"); 
    });

    
});