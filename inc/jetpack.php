<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package PDC
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @uses 	add_theme_support()
 */
function pdc_jetpack_setup() {

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

} // pdc_jetpack_setup()
add_action( 'after_setup_theme', 'pdc_jetpack_setup' );
