<?php
/**
 * ls2016 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ls2016
 */

if ( ! function_exists( 'ls2016_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ls2016_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ls2016, use a find and replace
	 * to change 'ls2016' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ls2016', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ls2016' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );


}
endif;
add_action( 'after_setup_theme', 'ls2016_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ls2016_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ls2016_content_width', 1100 );
}
add_action( 'after_setup_theme', 'ls2016_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ls2016_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ls2016' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ls2016' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ls2016_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ls2016_scripts() {
	wp_enqueue_style( 'ls2016-style', get_template_directory_uri() . '/css/styles.min.css' );

	wp_enqueue_script( 'jquery' );

	/*wp_register_script( 'ls2016-turbolinks', get_template_directory_uri() . '/js/turbolinks.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'ls2016-turbolinks' );*/

	wp_register_script( 'ls2016-javascript', get_template_directory_uri() . '/js/main.js', array( 'jquery'/*, 'ls2016-turbolinks'*/ ), '1', true );
	wp_enqueue_script( 'ls2016-javascript' );

	wp_enqueue_script( 'ls2016-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ls2016_scripts' );

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
