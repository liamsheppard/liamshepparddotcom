<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<header id='page-header'>
            <h1><?php the_title(); ?></h1>
            <h2><?php echo get_post_meta(get_the_id(), 'page_subtitle', true); ?></h2>
        </header>
        
        <article>

            <div class='post-content'>
                <?php the_content(); ?>
            </div>
			<?php endwhile;
			endif; ?>
			
			<!-- Twitter Scrolling Feed -->
			<?php if ( is_active_sidebar( 'twitter-widget' ) ) : ?>
				<div id='footer-twitter-widget' class='widget-area' role='complementary'>
					<img src='<?php bloginfo('stylesheet_directory'); ?>/img/twitter.svg' id='tweets-twitter'>
					<?php dynamic_sidebar( 'twitter-widget' ); ?>
				</div>
			<?php endif; ?>
			
        </article>
<?php get_footer(); ?>