<!DOCTYPE html>

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

    <!-- PAGE TITLE -->
	<?php
        if ( is_front_page() ) { ?>
            <title><?php bloginfo ('name'); ?></title>
        <?php }
        else if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                <title><?php the_title(); ?> | <?php bloginfo ('name'); ?></title>
            <?php }
        } ?>

    <!-- METADATA -->
    <meta charset='<?php bloginfo('charset'); ?>' />
    <meta name='author' content='Liam Sheppard'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name="keywords" content="brisbane,queensland,australia,uxui,web,design,development">
    <meta name="language" content="en">
    <meta name="classification" content="designer">
    <meta name="author" content="Liam Sheppard, liam@liamsheppard.com">
    <meta name="designer" content="Liam Sheppard">
    <meta name="coverage" content="Australia">

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

    <!-- STYLESHEET -->
    <link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/styles.min.css' />

    <!-- TYPEFACES -->
    <script src="https://use.typekit.net/pks4irj.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>
</head>

<body>

    <!-- NAVBAR -->
    <nav class='navbar'>
        <div id='menu-container'>
            <div id='menu-links'>
                <?php wp_nav_menu(array('menu' => 'Navigation')); ?>
            </div>
        </div>
        <div id='menu-button'>
            <img src='<?php bloginfo('stylesheet_directory'); ?>/img/menu.svg' id='menu-open'>
            <img src='<?php bloginfo('stylesheet_directory'); ?>/img/menuclose.svg' id='menu-close'>
        </div>
    </nav>

    <!-- FRONT PAGE HEADER -->
    <?php if ( is_front_page() ) { ?>
        <header class='page-header home-header'>
            <div class='header-content-wrapper'>
                <svg class='header-logo-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250.76 68.69"><title>logo-white</title><path d="M231,41.17H210.46a22.09,22.09,0,0,0-20.24,13.23,19.1,19.1,0,0,1-34.85,0,22.09,22.09,0,0,0-20.24-13.23,22.46,22.46,0,0,0-20.27,13.23,19.13,19.13,0,0,1-34.89,0A22.09,22.09,0,0,0,67.71,42.67a22.08,22.08,0,1,0-16,0A22.09,22.09,0,0,0,39.5,54.42h0A19.12,19.12,0,0,1,17.14,65.05,19.36,19.36,0,0,1,3,46.2V1.5A1.5,1.5,0,0,0,1.5,0h0A1.5,1.5,0,0,0,0,1.5V46.19A22.38,22.38,0,0,0,16.57,68,22.13,22.13,0,0,0,42.25,55.63a19.09,19.09,0,0,1,35,0,22.12,22.12,0,0,0,40.3.15,19.39,19.39,0,0,1,17.6-11.6,19.09,19.09,0,0,1,17.49,11.44,22.09,22.09,0,0,0,40.32,0,19.1,19.1,0,0,1,17.51-11.46H231a19.1,19.1,0,0,1,16.9,10.21,1.49,1.49,0,0,0,1.91.66h0a1.51,1.51,0,0,0,.73-2.08A22.1,22.1,0,0,0,231,41.17Zm-169.33-.1A19.09,19.09,0,1,1,78.72,24,19.11,19.11,0,0,1,61.72,41.07Z"/></svg>
                <h1 class='header-page-title'><?php bloginfo('name'); ?></h1>
                <h2 class='header-page-subtitle'><?php bloginfo('description'); ?></h2>
            </div>
            <a href='#' class='header-scroll-container'>
                <span class='header-scroll-text'>Scroll</span>
                <i class="fa fa-angle-down header-scroll-icon" aria-hidden="true"></i>
            </a>

        </header>

    <!-- ANY OTHER PAGE HEADER -->
    <?php } else {
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <header class='page-header'>
            <div class='header-content-wrapper'>
                <h1 class='header-page-title'><?php the_title(); ?></h1>
                <h2 class='header-page-subtitle'>Page Subtitle Here</h2>
            </div>
        </header>
		<?php endwhile;
		endif; ?>
    <?php } ?>
