<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package PDC
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>

<body <?php body_class(); ?>><?php

do_action( 'after_body' );

?><div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pdc' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="link-logo-pdc">
					<span class="screen-reader-text"><?php esc_html_e( 'Return to PDC/AREA homepage', 'pdc' ); ?></span>
					<img src="<?php echo get_theme_mod( 'pdc_logo' ); ?>" class="logo-pdc" alt="PDC Logo">
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="link-logo-area">
					<span class="screen-reader-text"><?php esc_html_e( 'Return to PDC/AREA homepage', 'pdc' ); ?></span>
					<img src="<?php echo get_theme_mod( 'area_logo' ); ?>" class="logo-area" alt="AREA Logo">
				</a>
			</h1>
		</div><!-- .site-branding --><?php

		get_template_part( 'menus/menu', 'services' );

		?><div class="search"><?php

		get_search_form();

		?></div>
		<div class="form-services">
			<div class="form-title"><?php esc_html_e( 'Request Services', 'pdc' ); ?></div><?php

			do_action( 'pdc_services_search' );

		?></div>
	</header><!-- #masthead -->
	<div class="not-header">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php

				echo pdc_get_svg( 'caret-left' ); ?><?php echo pdc_get_svg( 'hamburger' );

				?><span class="button-label"><?php esc_html_e( 'Menu', 'pdc' ); ?></span>
			</button>
			<div class="sidebar-menu"><?php

				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );

				get_template_part( 'template-parts/content', 'footer' );

			?></div>
		</nav><!-- #site-navigation -->
		<div class="sub-header" id="sub-header"><?php

		get_template_part( 'menus/menu', 'subheader' );

		get_template_part( 'menus/menu', 'social' );

		?></div>
		<div id="content" class="site-content">
			<div class="wrap wrap-content">
				<div class="breadcrumbs"><?php

					if ( function_exists( 'yoast_breadcrumb' ) ) {
						yoast_breadcrumb();
					}

				?></div>