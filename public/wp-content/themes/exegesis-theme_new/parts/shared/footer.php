    </div><!--.wrap .content-->
    <footer id="footer" class="wrapper footer">
        <ul class="interior">

<!--            <li class="third columns widget-box">-->
                <h3 class="widget-title">Revista Exégesis</h3>
                <ul class="menu-footer">
                    <?php get_template_part( 'parts/shared/menu' ); ?>
                </ul>
<!--
                <h3 class="clear widget-title">¡Únete a la comunidad!</h3>
                <ul class="social-footer">
                    <li><a title="Añádenos a tu lector de Feeds" href="<?php bloginfo('atom_url'); ?>" class="icon icon-feed"><span>RSS</span></a></li>
                    <li><a title="Síguenos en Twitter" target="_blank" href="https://twitter.com/RevistaExegesis" class="icon icon-twitter"><span>Twitter</span></a></li>
                    <li><a title="Añádenos a tus círculos" target="_blank" href="https://plus.google.com/109037244825488356251" rel="publisher" class="icon icon-google-plus"><span>Google+</span></a></li>
                    <li><a title="Síguenos en Facebook" target="_blank" href="https://www.facebook.com/revista.exegesis" class="icon icon-facebook"><span>Facebook</span></a></li>
                    <?php /* <li><a href="#" class="icon icon-pinterest"></a></li>  */ ?>
                </ul>

                <a href="https://www.facebook.com/groups/revistaexegesis/" target="_blank">
                    <?php
                    // Lazy image
                    $img_html = '<img src="//revista-exegesis.com/wp-content/uploads/2012/03/unete-grupo.png" alt="Unete a nuestro grupo de Facebook">';
                    $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                    echo $img_html;
                    ?>
                </a>
                <?php /*<br />
                <a href="colaboraciones/"><img src="//www.revista-exegesis.com/wp-content/uploads/2012/03/colabora-exegesis.png" alt="Colabora con Exégesis"></a> */ ?>

            </li>
            <li class="third columns widget-box">
                <h3 class="widget-title">Twitter</h3>
                <a class="twitter-timeline"  href="https://twitter.com/RevistaExegesis"  data-widget-id="357059621590028288">Tweets por @RevistaExegesis</a>
            
          
            </li>
            <li class="third columns widget-box">
                <h3 class="widget-title">Facebook</h3>
                <div class="fb-like-box" data-href="https://www.facebook.com/revista.exegesis" data-width="292" data-show-border="false" data-show-faces="false" data-stream="true" data-header="false"></div>
            </li>
        </ul>
-->
        <div class="sub-footer">
            <div class="interior">
                <h4>Revista Exégesis</h4>
                <a rel="license" href="//creativecommons.org/licenses/by-nc-nd/3.0/">
                <p>Todos los contenidos incluidos son propiedad de sus autores y están publicadas bajo la licencia <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Reconocimiento-No comercial-Sin obras derivadas 3.0 Unported License</a>.</p>
                <ul class="icon-footer">
                    <li><a rel="nofollow" title="Funcionamos con WordPress" class="icon icon-wordpress" href="http://wordpress.org/"><span>WordPress</span></a> </li>
                    <li><a rel="nofollow" title="¡HTML5 Válido!" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.revista-exegesis.com%2F" class="icon icon-html5"><span>HTML5</span></a></li>
                    <li><a rel="nofollow" title="¡CSS3 Válido!" href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.revista-exegesis.com%2F" class="icon icon-css3"><span>CSS3</span></a></li>
                </ul>
            </div><!-- .interior -->
        </div><!-- .subfooter -->
    </footer><!--.footer-->

    <?php /*get_template_part( 'parts/shared/gracias-pop-up' );*/ ?>
