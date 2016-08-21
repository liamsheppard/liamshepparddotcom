<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package liamsheppard2016
 */

?><!DOCTYPE html>
<!--

o        o  o
o      o      o
o      o      o
o        o  o          o  o           o  o  o
o      o      o      o      o       o         o
  o  o          o  o           o  o

-->

<html <?php language_attributes(); ?>>

<head lang='en'>

	<?php $blogtitle = get_bloginfo ('name'); ?>

	<title>
	<?php /* PAGE TITLE */
	if ( is_front_page() ) :
		echo $blogtitle;
	elseif ( is_archive() ) :
		$title = get_the_archive_title(); // This is also used for the header.
		$title = str_replace("Category: ","",$title); // FORMAT TITLE
		echo $title . ' | ' . $blogtitle;
	elseif ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_title('', ' | ' . $blogtitle);
		endwhile;
	endif; ?>
	</title>

	<!-- TYPEFACES -->
	<script src="https://use.typekit.net/pks4irj.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<meta charset='<?php bloginfo( 'charset' ); ?>'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='profile' href='http://gmpg.org/xfn/11'>
	<link rel='pingback' href='<?php bloginfo( 'pingback_url' ); ?>'>

	<!-- FAVICONS -->
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon16.png" sizes="16x16" type="image/png">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon48.png" sizes="48x48" type="image/png">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon62.png" sizes="62x62" type="image/png">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon192.png" sizes="192x192" type="image/png">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon228.png" sizes="228x228" type="image/png">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon76.png" sizes="76x76" type="image/png">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon120.png" sizes="120x120" type="image/png">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon152.png" sizes="152x152" type="image/png">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon180.png" sizes="180x180" type="image/png">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- SCREEN READER SKIP TO CONTENT -->
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'liamsheppard2016' ); ?></a>

	<!-- NAVIGATION -->
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<a href='/' class='nav-logo-link'>
			<svg class='nav-logo-bloom' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250.76 68.69"><title>logo-bloom</title><path d="M231,41.17H210.46a22.09,22.09,0,0,0-20.24,13.23,19.1,19.1,0,0,1-34.85,0,22.09,22.09,0,0,0-20.24-13.23,22.46,22.46,0,0,0-20.27,13.23,19.13,19.13,0,0,1-34.89,0A22.09,22.09,0,0,0,67.71,42.67a22.08,22.08,0,1,0-16,0A22.09,22.09,0,0,0,39.5,54.42h0A19.12,19.12,0,0,1,17.14,65.05,19.36,19.36,0,0,1,3,46.2V1.5A1.5,1.5,0,0,0,1.5,0h0A1.5,1.5,0,0,0,0,1.5V46.19A22.38,22.38,0,0,0,16.57,68,22.13,22.13,0,0,0,42.25,55.63a19.09,19.09,0,0,1,35,0,22.12,22.12,0,0,0,40.3.15,19.39,19.39,0,0,1,17.6-11.6,19.09,19.09,0,0,1,17.49,11.44,22.09,22.09,0,0,0,40.32,0,19.1,19.1,0,0,1,17.51-11.46H231a19.1,19.1,0,0,1,16.9,10.21,1.49,1.49,0,0,0,1.91.66h0a1.51,1.51,0,0,0,.73-2.08A22.1,22.1,0,0,0,231,41.17Zm-169.33-.1A19.09,19.09,0,1,1,78.72,24,19.11,19.11,0,0,1,61.72,41.07Z"/></svg>
		</a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		<span class='nav-search' id='nav-search-button-js'>
			<svg class='nav-search-svg'  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.11 137.11"><title>icon-search</title><path d="M135.64,128.57L102.12,95A57.86,57.86,0,1,0,95,102.11l33.53,33.53A5,5,0,0,0,135.64,128.57ZM24,91.67a47.86,47.86,0,1,1,67.68,0A47.91,47.91,0,0,1,24,91.67Z"/></svg>
		</span>
	</nav><!-- #site-navigation -->

	<!-- SEARCH BAR -->
	<div class='nav-searchbar-animate nav-hide' id='nav-searchbar-animate-js'></div>
	<div class='nav-searchbar nav-hide' id='nav-searchbar-js'>
		<span class='searchbar-close' id='nav-close-search-js'>
			<svg class='searchbar-close-svg' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 139.22 139.22"><title>icon-close</title><path d="M76.64,69.7l61-61a5,5,0,0,0-7.07-7.07l-61,61L8.4,1.46A5,5,0,0,0,1.33,8.54L62.49,69.7l-61,61a5,5,0,0,0,7.07,7.07l61-61,60.81,60.81a5,5,0,0,0,7.07-7.07Z" transform="translate(0.14)"/></svg>
		</span>

		<?php include("template-parts/navbar_search_form.php"); ?>
	</div>

	<!-- FRONT PAGE HEADER -->
        <header id='masthead' class='site-header <?php if ( is_front_page() ) { ?>home<?php } else { ?>page<?php } ?>-header' role='banner'>
            <div class='site-branding header-content-wrapper'>
                <?php if ( is_front_page() ) { ?><svg class='header-logo-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250.76 68.69"><title>logo-white</title><path d="M231,41.17H210.46a22.09,22.09,0,0,0-20.24,13.23,19.1,19.1,0,0,1-34.85,0,22.09,22.09,0,0,0-20.24-13.23,22.46,22.46,0,0,0-20.27,13.23,19.13,19.13,0,0,1-34.89,0A22.09,22.09,0,0,0,67.71,42.67a22.08,22.08,0,1,0-16,0A22.09,22.09,0,0,0,39.5,54.42h0A19.12,19.12,0,0,1,17.14,65.05,19.36,19.36,0,0,1,3,46.2V1.5A1.5,1.5,0,0,0,1.5,0h0A1.5,1.5,0,0,0,0,1.5V46.19A22.38,22.38,0,0,0,16.57,68,22.13,22.13,0,0,0,42.25,55.63a19.09,19.09,0,0,1,35,0,22.12,22.12,0,0,0,40.3.15,19.39,19.39,0,0,1,17.6-11.6,19.09,19.09,0,0,1,17.49,11.44,22.09,22.09,0,0,0,40.32,0,19.1,19.1,0,0,1,17.51-11.46H231a19.1,19.1,0,0,1,16.9,10.21,1.49,1.49,0,0,0,1.91.66h0a1.51,1.51,0,0,0,.73-2.08A22.1,22.1,0,0,0,231,41.17Zm-169.33-.1A19.09,19.09,0,1,1,78.72,24,19.11,19.11,0,0,1,61.72,41.07Z"/></svg><?php } ?>
                <h1 class='header-page-title'>
					<?php
					/* GET PAGE TITLE */
					if ( is_front_page() ) : // IF HOMEPAGE
						echo $blogtitle;
					elseif ( is_archive() ) : // IF ARCHIVE
						echo $title;
					else : // IF POST
				        while ( have_posts() ) : the_post();
							echo the_title();
						endwhile;
					endif; ?>
				</h1>
                <h2 class='header-page-subtitle'>
					<?php
					/* GET PAGE SUBTITLE */
					if ( is_front_page() ) : // IF HOMEPAGE
						bloginfo('description');
					elseif ( is_archive() ) : // IF ARCHIVE
						echo get_the_archive_description();
					else : // IF POST
				        while ( have_posts() ) : the_post();
							echo the_title();
						endwhile;
					endif; ?>
				</h2>
            </div><!-- .site-branding -->
            <?php if ( is_front_page() ) { ?><a href='#' class='header-scroll-container'>
                <span class='header-scroll-text'>Scroll</span>
                <i class="fa fa-angle-down header-scroll-icon" aria-hidden="true"></i>
            </a><!-- .header-scroll-container --><?php } ?>

        </header><!-- #masthead -->

	<div id="content" class="site-content">
