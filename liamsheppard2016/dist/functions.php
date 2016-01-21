<?php

function ls2015_scripts() {
    wp_register_script(
        'ls2015_script',
        get_stylesheet_directory_uri() . '/js/main.js',
        array( 'jquery' ), '1.0.0', true
    );
    wp_enqueue_script('ls2015_script');
}

add_action( 'wp_enqueue_scripts', 'ls2015_scripts' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'custom-header' );

/**
 * Register widgetized areas.
 */
function ls2015_widgets() {

	register_sidebar( array(
		'name'          => 'Twitter Widget',
		'id'            => 'twitter-widget',
	) );

	register_sidebar( array(
		'name'          => 'Share Widget',
		'id'            => 'share-widget',
	) );

}
add_action( 'widgets_init', 'ls2015_widgets' );

wp_admin_css_color(
      'ls2015',
      __('liamsheppard2015'),
      get_template_directory_uri() . '/minified-css/backend-scheme/colors.min.css',
      array('#242b2e', '#293135', '#27daa5', '#ed70a5'),
      array( 'base' => '#27daa5', 'focus' => '#27daa5', 'current' => '#27daa5' )
  );

?>
