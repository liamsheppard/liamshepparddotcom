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
			
        </article>
<?php get_footer(); ?>