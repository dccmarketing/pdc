<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

 *
 * @package PDC
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses 	add_theme_support()
 * @uses 	apply_filters()
 * @uses 	pdc_header_style()
 * @uses 	pdc_admin_header_style()
 * @uses 	pdc_admin_header_image()
 */
function pdc_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'pdc_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'pdc_header_style',
		'admin-head-callback'    => 'pdc_admin_header_style',
		'admin-preview-callback' => 'pdc_admin_header_image',
	) ) );

} // pdc_custom_header_setup()
add_action( 'after_setup_theme', 'pdc_custom_header_setup' );

if ( ! function_exists( 'pdc_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see pdc_custom_header_setup().
 *
 * @uses 	get_header_textcolor()
 */
	function pdc_header_style() {

		$header_text_color = get_header_textcolor();

		// If no custom options for text are set, let's bail
		// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
		if ( HEADER_TEXTCOLOR == $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?><style type="text/css"><?php
			// Has the text been hidden?
			if ( 'blank' == $header_text_color ) :

			?>.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}<?php

			// If the user has set a custom color for the text use that
			else :

			?>.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}<?php

		endif;

		?></style><?php

	} // pdc_header_style()
endif; // pdc_header_style

if ( ! function_exists( 'pdc_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see pdc_custom_header_setup().
 */
	function pdc_admin_header_style() {

		?><style type="text/css">
			.appearance_page_custom-header #headimg {
				border: none;
			}
			#headimg h1,
			#desc {
			}
			#headimg h1 {
			}
			#headimg h1 a {
			}
			#desc {
			}
			#headimg img {
			}
		</style><?php

	} // pdc_admin_header_style()
endif; // pdc_admin_header_style

if ( ! function_exists( 'pdc_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see pdc_custom_header_setup().
 *
 * @uses 	get_header_textcolor()
 * @uses 	esc_url()
 * @uses 	home_url()
 * @uses 	bloginfo()
 * @uses 	get_header_image()
 * @uses 	header_image()
 */
	function pdc_admin_header_image() {

		?><div id="headimg">
			<h1 class="displaying-header-text">
				<a id="name" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>" onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<div class="displaying-header-text" id="desc" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>"><?php bloginfo( 'description' ); ?></div><?php

			if ( get_header_image() ) :

				?><img src="<?php header_image(); ?>" alt=""><?php

			endif;

		?></div><?php

	} // pdc_admin_header_image()
endif; // pdc_admin_header_image
