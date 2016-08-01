(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		if ($(window).width() >= 992){
				$( "a.nav-button" ).click(function() {
				  $( "nav" ).fadeToggle(300);
				  $( "a.nav-button" ).toggleClass('open')
				  $( "a.sidebar-button" ).toggleClass('hide')
				});
				$( "a.sidebar-button" ).click(function() {
				  $( "aside" ).fadeToggle(300);
				  $( "a.sidebar-button" ).toggleClass('open')
				  $( "a.nav-button" ).toggleClass('hide')
				});
		}
		else{
				$( "a.nav-button" ).click(function() {
				  $( "nav" ).fadeToggle(300);
				  $( "a.nav-button" ).toggleClass('open')
				  $( "a.sidebar-button" ).toggleClass('hide')
				  $('html').toggleClass('stop-scrolling')
				});
				$( "a.sidebar-button" ).click(function() {
				  $( "aside" ).fadeToggle(300);
				  $( "a.sidebar-button" ).toggleClass('open')
				  $( "a.nav-button" ).toggleClass('hide')
				  $('html').toggleClass('stop-scrolling')
				});
		}
		
		
	});
	
})(jQuery, this);
