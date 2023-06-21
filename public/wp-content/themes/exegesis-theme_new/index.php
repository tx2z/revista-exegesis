<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( !is_paged() ) {
    //categorías de la web de producción: 8
    query_posts( '&cat=8&showposts=9&paged=1' );

    //changed catID by post_type=post to show all post and avoid show the autores post type
    //query_posts( '&post_type=post&showposts=9&paged=1' );
} else {
    //categorías de la web de producción: 258,171
    $offset_page = get_query_var('paged') *10 - 11;
    //query_posts( '&cat=258,171&showposts=10&paged=' . get_query_var('paged') . '&offset=' . $offset_page );
    //changed catID by post_type=post to show all post and avoid show the autores post type
    query_posts( '&cat=8&post_type=post&showposts=10&paged=' . get_query_var('paged') . '&offset=' . $offset_page );
} ?>
<?php if ( have_posts() ): ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php if( $wp_query->current_post == 0 && !is_paged() ): ?>
        <section id="featured-content" class="interior">
            <?php
                //Definimos los campos personalizados que vamos a utilizar
                $subtitulo  = get_post_meta( $post -> ID, "subtitulo" , $single = true );
                $extracto_largo  = get_post_meta( $post -> ID, "extracto_largo" , $single = true );
                $url_cbz    = get_post_meta( $post -> ID, "url_cbz"   , $single = true );
                $url_pdf    = get_post_meta( $post -> ID, "url_pdf"   , $single = true );
                $url_online = get_post_meta( $post -> ID, "url_online", $single = true );
            ?>
            <article itemscope itemtype="http://schema.org/Book" id="featured-post" class="post full">
                <header>
                    <div class="post-topbar clear">
                        <span class="post-subtitle"><?php if ($subtitulo) { the_title(); }else{ $category = get_the_category(); echo $category[0]->cat_name;} ?> </span>
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?></time>
                    </div>
                    <h2 itemprop="name" class="big-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php if ($subtitulo) { echo $subtitulo; }else{ the_title(); } ?></a></h2>
                </header>
                

                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { ?>
                    <a class="featured-post-thumb" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                        <?php the_post_thumbnail('featured-post-thumb', array("class" => "post-tumbnail aligncenter lazyload")); ?>
                    </a>
                <?php } ?>

                <div itemprop="description">
                <?php
                //Esta linea sería el excerpt largo con <p> automáticos
                  if ($extracto_largo) { echo '<p>'.$extracto_largo.'</p>'; } else { the_excerpt(); }  ?>
                </div>
                <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark" class="readmore">Más información</a>
                <footer class="clear">
                    <?php if ($url_cbz) { ?>
                    <a download href="<?php echo $url_cbz; ?>" class="button link_desc open-pop">Versión CBZ</a>
                    <?php } ?>

                    <?php if ($url_pdf) { ?>
                    <a target="_blank" href="<?php echo $url_pdf; ?>" class="button link_desc open-pop">Versión PDF</a>
                    <?php } ?>

                    <?php if ($url_online) { ?>
                    <a target="_blank" href="<?php echo $url_online; ?>" class="button online open-pop">Leer online</a>
                    <?php } ?>
                </footer>
            </article><!--#featured-post-->

            <!--Banner-->
            <div id="banner-slider">
                <?php if ( dynamic_sidebar('banner') ) : else : endif; ?>
            </div>
            <!--.Banner-->

        </section><!--#featured-content-->
        <?php /* Starkers_Utilities::get_template_parts( array( 'parts/shared/gracias-pop-up' ) ); */ ?>
    <?php else: ?>
        <?php if( $wp_query->current_post == 1 && !is_paged() ) { ?>
        <section id="other-post" class="interior">
            <h3>Publicaciones anteriores</h3>
        <?php } elseif( $wp_query->current_post == 0 && is_paged() ) { ?>
        <section id="other-post" class="interior">

            <!--Banner-->
            <div id="banner-slider">
                <?php if ( dynamic_sidebar('banner') ) : else : endif; ?>
            </div>
            <!--.Banner-->

            <h3>Publicaciones anteriores</h3>
            <?php if(function_exists('wp_paginate')): ?>
                <?php
                $total_posts = $wp_query->found_posts;
                $total_pages = $total_posts / 10;
                if ($total_posts%10==0){
                    $total_pages++;
                }
                wp_paginate(array('pages' => $total_pages, 'page' => get_query_var('paged')));
                ?>
            <?php endif; ?>

        <?php } ?>
        <?php
            //Definimos los campos personalizados que vamos a utilizar
            $subtitulo = get_post_meta( $post -> ID, "subtitulo", $single = true );
        ?>
            <article itemscope itemtype="http://schema.org/Book" class="post full">
                <div class="post-topbar clear">
                    <span class="post-subtitle"><?php if ($subtitulo) { the_title(); }else{ $category = get_the_category(); echo $category[0]->cat_name;} ?></span>
                    <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?></time>
                </div>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) {

                    echo the_post_thumbnail('post-thumb', array("class" => "alignright thumbnail lazyload"));

                } else {
                    //fallback fon old posts
                    $attachments = get_children( array(
                        'post_parent' => get_the_ID(),
                        'post_status' => 'inherit',
                        'post_type' => 'attachment',
                        'post_mime_type' => 'image',
                        'order' => 'ASC',
                        'orderby' => 'menu_order ID',
                        'numberposts' => 1)
                    );
                        foreach ( $attachments as $thumb_id => $attachment ) {
                            echo wp_get_attachment_image($thumb_id, post-thumb, "", array("class" => "alignright thumbnail lazyload"));
                        }
                    }
                     ?>
                </a>



                <header>
                    <h2 itemprop="name" class="post-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php if ($subtitulo) { echo $subtitulo; }else{ the_title(); } ?></a></h2>
                </header>
                <div class="post-content">
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                    <a itemprop="url" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark" class="readmore">Más información</a>
                </div>
            </article>
    <?php endif; ?>
<?php endwhile; ?>

<?php home_pagination_allpost(); ?>

    </section>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>