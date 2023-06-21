<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
        <section id="other-post" class="interior">

            <!--Banner-->
            <div id="banner-slider">
                <?php if ( dynamic_sidebar('banner') ) : else : endif; ?>
            </div>
            <!--.Banner-->

            <h1><?php echo single_cat_title( '', false ); ?></h1>

<?php while ( have_posts() ) : the_post(); ?>
<?php
    //Definimos los campos personalizados que vamos a utilizar
    $subtitulo = get_post_meta($post -> ID, "subtitulo", $single = true);
?>
            <article class="post half columns">
                <div class="post-topbar clear">
                    <span class="post-subtitle"><?php if ($subtitulo) { the_title(); }else{ $category = get_the_category(); echo $category[0]->cat_name;} ?></span>
                    <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time>
                </div>
                <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
                    <?php
                    // Lazy Load images
                    /*$image_id = get_post_thumbnail_id();
                    $image_url = wp_get_attachment_image_src($image_id,'post-thumb', true);
                    //retina images
                    //$image_url_2x = wp_get_attachment_image_src($image_id,'post-thumb_2x', true);
                    $title = the_title("","", false);
                    $img_html = '<img itemprop="image" class="post-tumbnail alignleft lazyload" src="'. $image_url[0] .'" srcset="'. $image_url_2x[0] .' 2x" alt="Portada '. $title .'" title="'. $title .'"/>';
                    //$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                    echo $img_html;*/

                    the_post_thumbnail('post-thumb', array("class" => "alignright thumbnail lazyload"));

                    ?>
                </a>
                <header>
                    <h2 class="post-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php if ($subtitulo) { echo $subtitulo; }else{ the_title(); } ?></a></h2>
                </header>
                <div class="post-content">
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                    <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark" class="readmore">Más información</a>
                </div>
            </article>

<?php endwhile; ?>
        <?php exe_pagination(); ?>
        </section>
<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>