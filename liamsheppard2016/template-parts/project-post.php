<?php
// Setup the variables used in constructing the post

// Setup post class
if ( in_category( 'work' ) ) :
    $class = 'project';
elseif ( in_category( 'blog' ) ) :
    $class = 'post';
else :
    $class = '';
endif;

$post_classes = array(
    'project-post',
    $class,
);

// Get meta information
if ( get_post_meta($post->ID, 'button_tagline', true) ) :
    $button_text = get_post_meta($post->ID, 'button_tagline', true);
else :
    $button_text = 'Check it out!';
endif;

if ( get_post_meta($post->ID, 'read_time', true) ) :
    $time_to_read = '<span class="time"><span class="fa fa-clock-o"></span> ' . get_post_meta($post->ID, 'read_time', true) . ' min read</span>';
endif;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( $post_classes ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <figure class='project-image-wrapper'>
            <?php the_post_thumbnail(); ?>
        </figure>
    <?php endif; ?>

    <div class='project-post-summary'>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class='centre-content-y'>
        <?php endif; ?>

        <a href='<?php the_permalink(); ?>'><h3><?php the_title(); ?></h3></a>
        <?php if ( in_category( 'blog' ) ) : ?>
            <span class='post-date'>Published <?php the_date('F j, Y'); ?></span>
        <?php endif; ?>
        <div class='post-time-comments'>
            <?php if ( get_post_meta($post->ID, 'read_time', true) ) :
            echo $time_to_read;
            endif; ?>
            <span class='comments'><span class="fa fa-comment-o"> 0</span>
        </div>
        <span class='post-tags'><?php the_tags( '', ', ', '' ); ?></span>
        <?php the_excerpt(); ?>
        <a href='<?php the_permalink(); ?>' class='btn btn-bloom'><?php echo $button_text; ?></a>

        <?php if ( has_post_thumbnail() ) : ?>
        </div> <!-- END .centre-content-y -->
        <?php endif; ?>
    </div> <!-- END .project-post-summary -->
</div> <!-- END .project-post -->
