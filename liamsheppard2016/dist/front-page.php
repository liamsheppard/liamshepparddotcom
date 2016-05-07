<?php
/**
 * Front Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liamsheppard2016
 */

get_header(); ?>

    <article>
        <h2>Featured Work</h2>
        <span class='home-subtitle'>Projects & Case Studies</span>

    	<?php query_posts( array ( ls2016_get_featured_content() ) );
    	if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class=''>
            <figure class='home-work-image-wrapper'>
                <?php if ( has_post_thumbnail() ) {
    				the_post_thumbnail();
    			}; ?>
            </figure>

            <div class='home-summary home-work-summary'>
                <h4><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
    			<a href='<?php the_permalink() ?>' class='button projectlink button-right'><span class='button-fill button-fill-right'></span><?php echo get_post_meta($post->ID, 'button_tagline', true); ?></a>
            </div>
        </div>
    	<hr class='divider'>
    	<?php endwhile; ?>
    	<?php endif; ?>

    	<div class='more-button'>
    		<a href='<?php get_site_url(); ?>/projects' class='button button-down'><span class='button-fill button-fill-down'></span>More Projects</a>
    	</div>

        <h3 class='dark-bg'>Latest Blog Posts</h3>

    	<?php query_posts( array ( 'category_name' => 'blog', 'posts_per_page' => 2 ) ); ?>
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<?php $post_mod = $post_no % 2; ?>
    	<div class='blogpost clearfix <?php if ( $post_mod == 1 ) { echo 'dark-bg'; } ?>'>

            <figcaption class='home-figcaption blog-figcaption'>
                <h4><?php the_title(); ?></h4>
                <h5>Published <?php the_date('F j, Y'); ?></h5>
                <?php the_excerpt(); ?>
    			<a href='<?php the_permalink() ?>' class='button projectlink button-right'><span class='button-fill button-fill-right'></span><?php echo get_post_meta($post->ID, 'button_tagline', true); ?></a>
            </figcaption>
        </div>
    	<hr class='divider'>
    	<?php $post_no = $post_no + 1; ?>
    	<?php endwhile; ?>

    	<?php endif; ?>

        <div class='more-button'>
    		<a href='<?php get_site_url(); ?>/blog' class='button button-down'><span class='button-fill button-fill-down'></span>More Posts</a>
    	</div>


    	<!-- Twitter Scrolling Feed -->
    	<?php if ( is_active_sidebar( 'twitter-widget' ) ) : ?>
    		<div id='footer-twitter-widget' class='widget-area' role='complementary'>
    			<?php dynamic_sidebar( 'twitter-widget' ); ?>
    		</div>
    	<?php endif; ?>

    </article>

<?php get_footer(); ?>
