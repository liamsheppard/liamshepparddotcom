<?php get_header(); ?>

        <article>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			endif; ?>

            <div class='dark-bg'>
                <h3>Latest Projects</h3>
            </div>
			<?php query_posts( array ( 'category_name' => 'projects', 'posts_per_page' => 3 ) ); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $post_mod = $post_no % 2; ?>
            <div class='project clearfix <?php if ( $post_mod == 1 ) { echo 'dark-bg'; } ?> '>
                <figure class='home-figure'>
                    <?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}; ?>
                </figure>

                <figcaption class='home-figcaption'>
                    <h4><?php the_title(); ?></h4>
                    <h5>For <?php echo get_post_meta($post->ID, "project_client", true); ?>,
						<?php echo get_post_meta(get_the_id(), 'project_year', true); ?></h5>
                    <?php the_excerpt(); ?>
					<a href='<?php the_permalink() ?>' class='button projectlink button-right'><span class='button-fill button-fill-right'></span><?php echo get_post_meta($post->ID, 'button_tagline', true); ?></a>
                </figcaption>
            </div>
			<hr class='divider'>
			<?php $post_no = $post_no + 1; ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php $post_no = 0; ?>

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
					<img src='<?php bloginfo('stylesheet_directory'); ?>/img/twitter.svg' id='tweets-twitter'>
					<?php dynamic_sidebar( 'twitter-widget' ); ?>
				</div>
			<?php endif; ?>

        </article>

<?php get_footer(); ?>
