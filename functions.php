<?php
/**
 * PDC functions and definitions
 *
 * @package PDC
 */

if ( ! function_exists( 'pdc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pdc_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'pdc' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pdc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'pdc' ),
		'social' => esc_html__( 'Social Links', 'pdc' ),
		'services' => esc_html__( 'Services Menu', 'pdc' ),
		'subheader' => esc_html__( 'SubHeader Menu', 'pdc' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );*/

} // pdc_setup()
endif; // pdc_setup
add_action( 'after_setup_theme', 'pdc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global 		int 		$content_width
 */
function pdc_content_width() {

	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );

}
add_action( 'after_setup_theme', 'pdc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function pdc_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pdc' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

} // pdc_widgets_init()
add_action( 'widgets_init', 'pdc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pdc_scripts() {

	wp_enqueue_style( 'pdc-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pdc-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20120206', true );

	wp_enqueue_script( 'pdc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'pdc-collapse', get_template_directory_uri() . '/js/collapse-submenus.min.js', array( 'jquery' ), '20150604', true );

	wp_enqueue_script( 'enquire', '//cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.2/enquire.min.js', array(), '20150706', true );

	wp_enqueue_script( 'pdc-enquire', get_template_directory_uri() . '/js/enquire.min.js', array( 'enquire', 'jquery' ), '20150706', true );

	wp_enqueue_style( 'pdc-fonts', pdc_fonts_url(), array(), null );

} // pdc_scripts()
add_action( 'wp_enqueue_scripts', 'pdc_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Slushman Themekit
 */
require get_template_directory() . '/inc/themekit.php';

/**
 * Load Slushman Menukit
 */
require get_template_directory() . '/inc/menukit.php';
