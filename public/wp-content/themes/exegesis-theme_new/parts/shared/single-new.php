            <?php
                //Definimos los campos personalizados que vamos a utilizar
                $subtitulo  = get_post_meta( $post -> ID, "subtitulo" , $single = true );
                $url_cbz    = get_post_meta( $post -> ID, "url_cbz"   , $single = true );
                $url_pdf    = get_post_meta( $post -> ID, "url_pdf"   , $single = true );
                $url_online = get_post_meta( $post -> ID, "url_online", $single = true );
            ?>
            <article id="single-post" class="post two-thirds columns" style="position:relative">
                <header>
                    <div class="post-topbar clear">
                        <span class="post-subtitle"><?php if ($subtitulo) { the_title(); }else{ $category = get_the_category(); echo $category[0]->cat_name;} ?></span>
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?></time>
                    </div>
                    <h1 class="post-title"><?php if ($subtitulo) { echo $subtitulo; }else{ the_title(); } ?></h1>
                </header>

                <div id="sidebar-mobile" class="aside">
                    <div class="button descargar">
                        <h3>Descárgalo</h3>
                        <ul>
                            <li><a target="_blank" href="<?php echo $url_cbz; ?>">Versión CBZ</a></li>
                            <li><a target="_blank" href="<?php echo $url_pdf; ?>">Versión PDF</a></li>
                        </ul>
                    </div>
                    <?php if ($url_online) { ?>
                    <h3>O léelo online</h3>
                    <a target="_blank" href="<?php echo $url_online; ?>" class="button online">Leer online</a>
                    <?php } ?>
                </div>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <footer>
                    <nav class="navigation-single clear">
                        <ul>
                            <li class="navigation-single-prev">
                                <?php previous_post_link( '%link', '%title', true ); ?>
                            </li>
                            <li class="navigation-single-next">
                                <?php next_post_link( '%link', '%title', true); ?>
                            </li>
                        </ul>
                    </nav>
                    <?php comments_template( '', true ); ?>
                </footer>
            </article><!--#featured-post-->

            <aside class="third columns">
                <section id="sidebar">

                    <div class="sidebar-widget">
                        <h3>Descárgalo</h3>
                        <div class="button descargar">
                            <ul>
                                <li><a class="" href="<?php echo $url_cbz; ?>" download >Versión CBZ</a></li>
                                <li><a class="" href="<?php echo $url_pdf; ?>" target="_blank" >Versión PDF</a></li>
                            </ul>
                        </div>
                    </div>

                    <?php if ($url_online) { ?>
                    <div class="sidebar-widget">
                        <h3>O léelo online</h3>
                        <a href="<?php echo $url_online; ?>" target="_blank" class="button online">Leer online</a>
                    </div>
                    <?php } ?>

                    <div class="sidebar-widget">
                        <h3>Y cómpartelo</h3>
                        <ul class="social-links">
                            <li>
                            <a title="Compartir en Google Plus" href="https://plusone.google.com/_/+1/confirm?hl=es&amp;url=<?php esc_url( the_permalink() ); ?>" target="_blank" class="icon icon-google-plus"><span>Compartir en Google Plus</span></a>
                            </li>
                            <li>
                            <a title="Compartir en Twitter" href="http://twitter.com/home?status=Revista Exégesis - <?php the_title(); ?> - <?php esc_url( the_permalink() ); ?>" target="_blank" class="icon icon-twitter"><span>Compartir en Twitter</span></a>
                            </li>
                            <li>
                            <a title="Compartir en Facebook" href="http://facebook.com/share.php?u=<?php esc_url( the_permalink() ); ?>" target="_blank" class="icon icon-facebook"><span>Compartir en Facebook</span></a>
                            </li>
                        </ul>
                    </div>

                </section>
            </aside>
            <hr class="clearfix" style="clear:both"></div>
            <?php /* Starkers_Utilities::get_template_parts( array( 'parts/shared/gracias-pop-up' ) ); */ ?>
