<?php
/**
 * The template used to display Tag Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
		
		<section class="interior">
		
		<?php if ( have_posts() ): ?>
		
			<h1>Archivos por etiqueta: <?php echo single_tag_title( '', false ); ?></h1>
			
		<?php while ( have_posts() ) : the_post(); ?>
				
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?></time> <?php //comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
					
			<?php if ( in_category( 'colecciones' )|| (in_category( 'numeros' ))) {?>
                    
				<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
                                    
                	<img class="post-tumbnail alignleft" src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="Portada <?php the_title(); ?>" title="<?php the_title(); ?>">
                </a>
                    		
				<?php the_excerpt(); ?>
				
				<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark" class="readmore">Más información</a>

			<?php }?>
			
			</article>
				
		<?php endwhile; ?>
			
		<?php else: ?>
		
			<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
		
		<?php endif; ?>
			
			
			<?php exe_pagination(); ?>
			
		
		</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
