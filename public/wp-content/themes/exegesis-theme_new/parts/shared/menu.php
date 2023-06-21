                <li><a <?php if( $_SERVER['REQUEST_URI'] == '/' ) { ?>class="active" <?php } ?>href="<?php echo site_url(); ?>/">Inicio</a></li>

                <li><a <?php if( is_category( 'colecciones' ) ) { ?>class="active" <?php } ?>href="<?php echo site_url(); ?>/categoria/colecciones">Colecciones</a></li>

                <li><a <?php if( is_post_type_archive('autores') ) { ?>class="active" <?php } ?>href="<?php echo site_url(); ?>/autores">Autores</a></li>

                <li><a <?php if( is_category( 'entradas' ) ) { ?>class="active" <?php } ?>href="<?php echo site_url(); ?>/categoria/entradas">Todas las entradas</a></li>

                <li><a <?php if( is_page( 18 ) ) { ?>class="active" <?php } ?>href="<?php echo site_url(); ?>/sobre-exegesis">Sobre Exégesis</a></li>

                <?php /*<li><a <?php if( is_page( 10 ) ) { ?>class="active" <?php } ?>href="<?php echo site_url(); ?>/colaboraciones">Colabora</a></li>

                 <li><a <?php if( is_page( 6736 ) ) { ?>class="active" <?php } ?>href="<?php echo site_url(); ?>/financiacion">Financiación</a></li> */?>
