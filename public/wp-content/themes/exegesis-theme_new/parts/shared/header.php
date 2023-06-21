    <header id="header" class="wrapper">

        <div class="interior fondo-logo">
            <div class="third columns logo">

                <?php echo ( is_front_page() || is_home() || is_404() ) ? '<h1 id="logo">' : '<div id="logo">'; ?>

                        <a href="<?php bloginfo('url'); ?>" rel="home">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/potencial-logo.png" alt="<?php bloginfo('name'); ?>" />
                        </a>
                        <span class="subheader"><?php bloginfo('description'); ?></span>

                <?php echo ( is_front_page() || is_home() || is_404() ) ? '</h1>' : '</div>'; ?>

            </div>

            <div class="two-thirds columns bocadillo">
                <a class="icon-menu"  id="simple-menu" href="#sidr"></a>

                <?php //Aquí tendría mis dudas con este h3... ?>
                <strong class="clear">¡Únete a nuestra comunidad!</strong>
                <ul class="social-header">
                    <li><a title="Añádenos a tu lector de Feeds" href="<?php bloginfo('atom_url'); ?>" class="icon icon-feed"><span>RSS</span></a></li>
                    <li><a title="Síguenos en Twitter" target="_blank" href="https://twitter.com/RevistaExegesis" class="icon icon-twitter"><span>Twitter</span></a></li>
                    <li><a title="Añádenos a tus círculos" href="https://plus.google.com/109037244825488356251" rel="publisher" class="icon icon-google-plus"><span>Google+</span></a></li>
                    <li><a title="Síguenos en Facebook" target="_blank" href="https://www.facebook.com/revista.exegesis" class="icon icon-facebook"><span>Facebook</span></a></li>
                    <?php /*<li><a href="#" class="icon icon-pinterest"></a></li> */?>
                </ul>

            </div>

        </div>

        <nav id="primary-navigation" class="wrapper">
            <ul class="interior">
            <?php get_template_part( 'parts/shared/menu' ); ?>
            </ul>
        </nav><!-- #primary-navigation -->
    </header><!-- #header -->
    <!-- Content -->
    <div class="wrap content">