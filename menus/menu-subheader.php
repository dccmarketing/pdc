<?php if ( has_nav_menu( 'subheader' ) ) {

	$menu['theme_location']		= 'subheader';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-subheader';
	$menu['container_class'] 	= 'menu nav-subheader';
	$menu['menu_id']         	= 'menu-subheader-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>