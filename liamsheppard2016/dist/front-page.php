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
        <span class='home-heading-subtitle'>Projects & Case Studies</span>

    	<?php query_posts( array ( 'category_name' => 'work', 'posts_per_page' => 2 ) );
        if (have_posts()) : while (have_posts()) : the_post();
                include("project-post.php");
    	endwhile;
        endif; ?>

    	<div class='strip strip-desert-night strip-btn'>
    		<a href='/work' class='btn btn-apogee'>More Projects</a>
    	</div>

        <h2>Latest Posts</h2>
        <span class='home-heading-subtitle'>Opinions & Tutorials</span>

    	<?php query_posts( array ( 'category_name' => 'blog', 'posts_per_page' => 2 ) );
        if (have_posts()) : while (have_posts()) : the_post();
                include("project-post.php");
        endwhile;
        endif; ?>

        <div class='strip strip-desert-night strip-btn'>
    		<a href='/blog' class='btn btn-apogee'>More Posts</a>
    	</div>

        <div class='strip strip-ezra strip-btn'>

        </div>

    	<!-- Twitter Scrolling Feed -->
    	<?php if ( is_active_sidebar( 'twitter-widget' ) ) : ?>
    		<div id='footer-twitter-widget' class='widget-area' role='complementary'>
    			<?php dynamic_sidebar( 'twitter-widget' ); ?>
    		</div>
    	<?php endif; ?>

    </article>

<?php get_footer(); ?>
