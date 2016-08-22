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

<div class='under-construction-container'>
  <img class='under-construction-gif' src='<?php bloginfo('stylesheet_directory'); ?>/img/under-construction.gif'></div>
  <div><a href='http://www.linkedin.com/in/liamsheppard' target='_blank' class='footer-socialmedia-link'><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></div>
</div>
