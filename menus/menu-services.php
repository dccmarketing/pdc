<?php if ( has_nav_menu( 'services' ) ) {

	$menu['theme_location']		= 'services';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-services';
	$menu['container_class'] 	= 'menu nav-services';
	$menu['menu_id']         	= 'menu-services-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>