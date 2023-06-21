<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<section id="404" class="interior page">
    <h2>Página no encontrada</h2>
    <p style="font-size: 1.2em">
        <strong>Los robots de la cúpula de los exégetas encargados de conectarte con la Revista Exégesis no han podido encontrar la página que nos pides.</strong>
    </p>
    <p class="" style="display:inline">
        Mensaje recibido:
    </p>
    <h3 style="text-align:center; background:#1a1a1a; color:orange; padding:15px;">
        La página solicitada no se encuentra en la base de datos actual de Revista Exégesis. 
        <strong style="font-weight:300;font-size:1.5em; color:red; display:block;">Código de error: 404</strong>
    </h3>
    <ul>
        <li>Si introdujo bien la URL en la barra de dirección de su navegador, o fue dirigido aquí desde otra página, puede ser que el contenido haya sido movido de sitio o haya desaparecido de los bancos de datos de la Cúpula. <a href="mailto:tx2z@caosmental.com">Énvíenos un email</a> para que podamos enviar a un robot obrero a revisar el problema.</li>
        <li>No podemos procesar todos los requerimientos erróneos generados por su rudimentaria interacción con el ordenador mediante la interfaz de entrada que llaman "teclado". Por favor revise si ha escrito bien la dirección o pruebe a navegar al contenido deseado desde la <a href="/">Portada de la Revista Exégesis</a>.</li>
        <li>Si usted es un viajero del tiempo, por favor, compruebe la fecha de su medio de transporte temporal. No podemos servirle páginas aún no generadas en el momento en el que hace la petición para evitar paradojas.</li>
        <li>Si está intentando acceder a una página que aún no ha escrito o aún no está publicada, y que le gustaría ver publicada en la revista, puede enviar su cómic a la <a href="/colaboraciones/">sección de colaboradores</a></li>
    </ul>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>