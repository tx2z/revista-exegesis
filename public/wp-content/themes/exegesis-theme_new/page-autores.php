<?php
/*
Template Name: Authors page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<div class="interior">
		
		<h1><?php the_title(); ?></h1>

	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>
		
		<form class="search-autor">
			<h2>Lista de autores</h2>
			<label for="search-author">Busca por autor</label>	
			<input type="text" id="search-author" placeholder="Escribe aquí..." />	
		</form>
	
		<ul class="authors-list">
				
		<?php $wp_query = new WP_Query(array(
			'post_type' => 'autores',
		    'paged' => $paged,
		    'posts_per_page' => 9999,
			'orderby' => 'title',
			'order' => 'ASC')
		);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
		<?php
        //Definimos los campos personalizados que vamos a utilizar
        $img_facebook  = get_post_meta( $post -> ID, "img_facebook" , $single = true );
        ?>
			<li class="third columns autor-li" id="post-<?php the_ID(); ?>">

				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'reverie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
					
				<?php /* if ( has_post_thumbnail() ) { ?> 
					
					<?php the_post_thumbnail('avatar-autor',array('title' => '')); ?>
				
				<?php } else if ($img_facebook) { ?>
					
					<img src="https://graph.facebook.com/<?php echo $img_facebook; ?>/picture?type=small" alt="<?php the_title(); ?>" />
					
				<?php } else { ?>
				     	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default-author-small.png" alt="<?php the_title(); ?>" />
				    <?php }; */ ?>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default-author-small.png" alt="<?php the_title(); ?>" />

					<span><?php the_title(); ?></span>

				</a>
				
			</li>
		
		<?php endwhile ?>		
		<?php wp_reset_query();	 ?>
		</ul>
			
	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>