<article>

    <h3><?php the_title(); ?></h3>
    <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?> <?php the_time(); ?></time>
    <?php /*<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>*/?>
    <?php the_content(); ?>

    <?php if ( get_the_author_meta( 'description' ) ) : ?>
    <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
    <h3>About <?php echo get_the_author() ; ?></h3>
    <?php the_author_meta( 'description' ); ?>
    <?php endif; ?>

    <?php comments_template( '', true ); ?>

</article>