/**
 * Collapses and expands submenus
 */

( function( $ ) {



	$( ".menu-item-has-children" ).each( function() {

		var parent = $(this);
		var link = parent.children( 'a' );
		var submenu = parent.children( ".sub-menu" );
		var clicker = link.children( ".show-hide" );

		if ( ! parent.hasClass( "open" ) ) {

			link.click( function( event ) {

				event.preventDefault();

				submenu.slideToggle(250);
				parent.toggleClass( "open" );

				if ( parent.hasClass( "open" ) ) {

					clicker.html("-");

				} else {

					clicker.html("+");

				}

			});

		} // if

	});

} )( jQuery );