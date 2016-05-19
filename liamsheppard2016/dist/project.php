<div class='project-post project'>
    <figure class='project-image-wrapper'>
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }; ?>
    </figure>

    <div class='project-post-summary'>
        <h3><?php the_title(); ?></h3>
        <span class='post-tags'><?php the_tags( '', ', ', '' ); ?></span>
        <?php the_excerpt(); ?>
        <a href='<?php the_permalink() ?>' class='btn btn-desert-night'><?php echo get_post_meta($post->ID, 'button_tagline', true); ?>Check it out!</a>
    </div>
</div>
