 <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<section id="single-content" class="interior">

        <?php
        //Definimos los campos personalizados que vamos a utilizar
        $img_facebook  = get_post_meta( $post -> ID, "img_facebook" , $single = true );
        ?>
            <article id="single-post" class="post" style="position:relative">

                <header>
                    <div class="post-topbar clear">
                        <span class="post-subtitle">Autores</span>
                        <span style="float:right">Exégesis</time>
                    </div>
                    <h1 class="post-title"><?php the_title(); ?></h1>
                </header>

                <?php /*<div id="sidebar-mobile" class="aside">

                    <?php if ( has_post_thumbnail() ) { ?>
                        <?php the_post_thumbnail('medium',array('title' => '', 'class' => 'alignleft')); ?>
                    <?php } else { ?>

                        <img src="https://graph.facebook.com/<?php $img_facebook; ?>/picture?type=large" class="alignleft" alt="<?php the_title(); ?>" />

                    <?php } ?>

                </div> */ ?>
                <?php if ( has_post_thumbnail() ) { ?>

                        <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail('avatar-autor-large', array("class" => "autor-image")); } ?>

                <?php } else if ($img_facebook) { ?>

                          <img src="https://graph.facebook.com/<?php echo $img_facebook; ?>/picture?type=large" class="autor-image" alt="<?php the_title(); ?>" />

                <?php } else { ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default-author-large.png" class="autor-image" alt="<?php the_title(); ?>" />
                        <?php }; ?>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <footer>

                    <?php // comments_template( '', true ); ?>
                </footer>
            </article><!--#featured-post-->

            <?php /*<aside class="third columns">
                <section id="sidebar-autor">

                    <div class="sidebar-widget">

                    <?php if ( has_post_thumbnail() ) { ?>
                        <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail('medium', array("class" => "alignleft post_thumbnail")); } ?>
                    <?php } else { ?>

                          <img src="https://graph.facebook.com/<?php echo $img_facebook; ?>/picture?type=large" class="alignleft" alt="<?php the_title(); ?>" />

                    <?php } ?>

                    </div>

                    <div class="sidebar-widget">
                        <h3>Titulazo</h3>
                        <p>He añadido mi<?php $img_facebook; ?> foto en el wordpress y tu foto es la de facebook grande. el problema es que no es tan grande como el sidebar</p>
                        <p>Podríamos poner aquí algún widget, como trabajos más populares (con algún sistema de medición por comentarios, o por visitas, pero tendría que ver cómo hacerlo) o incluso alguno de esos datos como sitio web y tal, mediante custom-fields</p>
                    </div>

                </section>

            </aside> */ ?>

    </section>
<?php endwhile; ?>
    <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>