<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header id='page-header'>
            <h1><?php the_title(); ?></h1>
            <h2><?php echo get_post_meta(get_the_id(), 'page_subtitle', true); ?></h2>
        </header>

        <article>

            <div class='dark-bg'>
                <?php the_content; ?>
            </div>
			<?php endwhile;
			endif; ?>


			<?php query_posts( array ( 'category_name' => 'projects', 'posts_per_page' => 20 ) ); ?>
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
			<?php $post_no = $post_no + 1; ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php $post_no = 0; ?>

        </article>
<?php get_footer(); ?>
