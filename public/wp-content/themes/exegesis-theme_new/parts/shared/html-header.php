<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" >
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png" rel="apple-touch-icon" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144" />

<?php /*
<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Oxygen:300|Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- Font icons CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/icons/style.css">
<!-- jquery.sidr CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/sidr/stylesheets/jquery.sidr.custom.css">
*/ ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

<!-- Modernizr
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.js"></script>
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="//www.revista-exegesis.com/wp-content/themes/exegesis-theme/js/css3-mediaqueries.js"></script>
<![endif]-->
<!--icomoon compatibilidad con IE7-->
<!--[if lte IE 7]><script src="//www.revista-exegesis.com/wp-content/themes/exegesis-theme/icons/lte-ie7.js"></script><![endif]-->

<?php wp_head(); ?>

<style>
.lazyload,
.lazyloading {
    opacity: 0;
    /*transform: scale(0.8);*/
}
.lazyloaded {
    opacity: 1;
    /*transform: scale(1);*/
    transition: opacity 300ms;
}

@media only screen and (min-width:768px) {

}
</style>

</head>
<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?>>
