<!DOCTYPE html>

<!--
Student Name - Liam Sheppard
Student Number - n08889015
Tutorial Class - Tuesday 11am-1pm
Assignment - Submission 2
Due Date - 23/10/2015
-->

<html <?php language_attributes(); ?>>

<head lang='en'>
    <meta charset='<?php bloginfo('charset'); ?>' />
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <title><?php the_title(); ?> | <?php bloginfo ('name'); ?></title>
	<?php endwhile;
	endif; ?>
	
    <meta name='keywords' content='Queensland, Interface, Experience, Design, Development, UX, UI'>
    <meta name='author' content='Liam Sheppard'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	
    <link rel='shortcut icon' type='image/png' href='<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png'/>
    <link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_url'); ?>' />
	<?php wp_head(); ?> 
</head>

<body>
	
    <div id='wrapper'>
        
        <nav id='mobile-nav'>
            <div id='menu-container'>
                <div id='menu-hide'></div>
                <div id='menu-links'>
                    <?php wp_nav_menu(array('menu' => 'Navigation')); ?>
                </div>
            </div>
            <div id='menu-button'>
                <img src='<?php bloginfo('stylesheet_directory'); ?>/img/menu.svg' id='menu-open'>
                <img src='<?php bloginfo('stylesheet_directory'); ?>/img/menuclose.svg' id='menu-close'>
            </div>
        </nav>
        
        <nav id='wide-nav'>
			<a href='<?php echo get_bloginfo( 'url' )?>'><h5 id='menu-name'><?php bloginfo('name'); ?></h5></a>
            <?php wp_nav_menu(array('menu' => 'Navigation')); ?>
        </nav>