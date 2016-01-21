<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header id='page-header'>

            <h1><?php the_title(); ?></h1>
            <?php if ( in_category( 'projects' ) ) { ?>
				<h2>For <?php echo get_post_meta(get_the_id(), 'project_client', true); ?>, <?php echo get_post_meta(get_the_id(), 'project_year', true); ?></h2>
			<?php } elseif ( in_category( 'blog' ) ) { ?>
				<h2>Published <?php the_date('F j, Y'); ?></h2>
			<?php } ?>
        </header>

        <article>

            <div class='post-content'>
                <?php the_content(); ?>
            </div>

			<?php if ( in_category( 'projects' ) ) {
				$back_link = 'projects';
				$back_text = 'More Projects';
			} elseif ( in_category( 'blog' ) ) {
				$back_link = 'blog';
				$back_text = 'More Posts';
			} ?>

			<?php if ( is_active_sidebar( 'share-widget' ) ) : ?>
				<div id='post-share-widget' class='widget-area' role='complementary'>
					<h4>Share This</h4>
					<?php dynamic_sidebar( 'share-widget' ); ?>
				</div>
			<?php endif; ?>

			<div class='more-button more-button-no-shadow'>
				<a href='<?php get_site_url(); ?>/<?php echo $back_link ?>' class='button button-down'><span class='button-fill button-fill-down'></span><?php echo $back_text ?></a>
			</div>

        </article>
		<?php endwhile;
		endif; ?>
<?php get_footer(); ?>
