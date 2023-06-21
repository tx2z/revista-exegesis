<?php
                //Definimos los campos personalizados que vamos a utilizar
                $subtitulo  = get_post_meta( $post -> ID, "subtitulo" , $single = true );
                ?>

<div id="gracias-wrapper">
    <div id="gracias">
    <div id="gracias-int">
        <div id="gracias-cerrar" class="cerrar-gracias">x</div>
        <!--<div class="post-topbar clear">
            <span class="post-subtitle"><?php if ($subtitulo) { the_title(); }else{ $category = get_the_category(); echo $category[0]->cat_name;} ?></span>
        </div>
        <h2><?php if ($subtitulo) { echo $subtitulo; }else{ the_title(); } ?></h2>
        <p><strong>¡Esperamos que disfrutes de la lectura!</strong></p>
        <p>Si aún no se ha abierto, haz click <a id="gracias-link" href="#" target="_blank">aquí</a> para comenzar la descarga o abrir el visor online.</p>
        <p>Cuando termines, no olvides <a class="cerrar-gracias" href="<?php esc_url( the_permalink() ); ?>#comments" id="gracias-comments">dejarnos un comentario</a> y compartir la descarga en las redes sociales con tus amigos y conocidos</p>
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
        <p>También te recordamos que Exégesis es una publicación sin fines de lucro que llega gratuitamente a muchísimos lectores y aloja a gran cantidad de autores. Tú también puedes financiar este proyecto y ayudar a que crezca día a día.</p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick" />
            <input type="hidden" name="hosted_button_id" value="RFHMQZH6CHBYN" />
            <input class="paypal_button button" type="submit" alt="PayPal. La forma rápida y segura de pagar en Internet." name="submit" value="Contribuir" /><br />
            <img alt="pixel Financiación" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" border="0" title="pixel" />
        </form>-->

        <iframe src="https://docs.google.com/forms/d/1TKdxd3I4i-Gm2wJzdyeEJV1sfD8bzzdtMHBi9QV8Ugg/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
    </div>
    </div>
</div>