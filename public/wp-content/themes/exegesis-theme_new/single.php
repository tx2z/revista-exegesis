<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section id="single-content" class="interior">

<?php if( in_category( 'colecciones' ) || in_category( 'numeros' ) ) { ?>
    <?php get_template_part( 'parts/shared/single-new' ); ?>
<?php } else { ?>
    <?php get_template_part( 'parts/shared/single-old' ); ?>
<?php } ?>

</section>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
