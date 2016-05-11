/**
 * Enquire.js for adding toggled class to menu based on media query
 */

( function( $ ) {

	var nav = $( '#site-navigation' );

	enquire.register("screen and (min-width: 650px)", {
		match : function() {
			nav.addClass( 'toggled' );
		},
		unmatch : function() {
			nav.removeClass( 'toggled' );
		}
	});

})( jQuery );