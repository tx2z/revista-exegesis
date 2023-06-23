<!DOCTYPE html>
<html manifest="manifest.php?page=<?php echo $_GET["page"] ?>">
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $_GET["name"] ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link href="../_assets_jqm/img/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
		<link href="../_assets_jqm/img/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
		<link href="../_assets_jqm/img/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
		<link href="../_assets_jqm/img/apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
		<link href="../_assets_jqm/img/apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
		<link href="../_assets_jqm/img/apple-touch-startup-image-1496x2048.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

		<link rel="stylesheet" href="../_assets_jqm/css/jquery.mobile-1.1.0.min.css" type="text/css"/>
		<link rel="stylesheet" href="../_assets_jqm/css/exegesis-jquerymobile-theme.css" type="text/css"/>
		<link rel="stylesheet" href="../_assets_jqm/css/stilexe.css" type="text/css"/>
		<link rel="stylesheet" href="../_assets_jqm/css/add2home.css">
		<script src="../_assets_jqm/js/klass.min.js" type="text/javascript"></script>
		<script src="../_assets_jqm/js/jquery-1.6.4.min.js" type="text/javascript"></script>
		<script src="../_assets_jqm/js/jquery.mobile-1.1.0.min.js" type="text/javascript"></script>
		<script src="../_assets_jqm/js/code.photoswipe.jquery-3.0.4.min.js" type="text/javascript"></script>
		<script src="../_assets_jqm/js/scriptexe.js" type="text/javascript"></script>
		<script type="text/javascript">
			var addToHomeConfig = {
				lifespan:10000,
				touchIcon:true,
				message: 'es_es'
			};
		</script>
		<script src="../_assets_jqm/js/add2home.js" type="application/javascript"></script>
	</head>
	<body>
<?php
// load XML
$xmlcontent = new SimpleXMLElement('../source/' . $_GET["page"] . '.xml', null, true);

// loop through XML file
foreach ($xmlcontent as $key => $content) {

// Portada
if ($content -> Type == 'portada') {
$nextPage = $content['id'] + 1;
$nextPageTitle = $xmlcontent -> Page[$nextPage] -> Title;
?>
		<div data-role="page" id="index" data-theme="b">
			<div data-role="content">
				<ul class="cb-slideshow">
					<li id="indexTitle1">
						<span style="background: #000"> </span>
						<div>
							<h3><img src="../_assets_jqm/img/logo-exegesis.png" alt="Revista Exégesis" /></h3>
						</div>
					</li>
<?php
$total = count($content->Txt->TitleDes);
for ($i = 0; $i <= $total; $i++) {
?>
					<li id="indexTitle2">
						<span style="background-image: url('<?php echo $content->Img->Image[$i] ?>'); "> </span>
						<div>
							<h3><?php echo $content->Txt->TitleDes[$i]?></h3>
						</div>
					</li>
<?php } ?>
				</ul>
			</div>
			<footer data-role="footer" data-id="indexfooter" data-position="fixed" data-tap-toggle="false" data-theme="b">
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#about" data-icon="arrow-l" data-transition="fade" data-direction="reverse" id="previousPage"><?php echo $xmlcontent -> About -> Title ?></a>
						</li>
						<li>
							<a href="#indice" data-rel="dialog" data-transition="slidedown" data-icon="grid">Índice</a>
						</li>
						<li>
							<a href="#page<?php echo $nextPage ?>" data-icon="arrow-r" data-transition="fade" id="nextPage"><?php echo $nextPageTitle ?></a>
						</li>
					</ul>
				</div>
			</footer>
		</div>
<?php }
// About
elseif ($content -> Type == 'about') {
?>
		<div data-role="page" id="about">
			<article data-role="content">
				<header>
					<h2 id="titlePage"><?php echo $content -> Title ?></h2>
				</header>
				<div id="contentPage">
					<div class="entry">
						<?php echo $content->Txt ?>
					</div>
				</div>
			</article>
			<footer data-role="footer" data-id="aboutfooter" data-position="fixed" data-tap-toggle="false" data-theme="b">
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#page<?php echo $nextPage ?>" data-icon="arrow-r" data-transition="fade" id="previousPage"><?php echo $nextPageTitle ?></a>
						</li>
						<li>
							<a href="#indice" data-rel="dialog" data-transition="slidedown" data-icon="grid">Índice</a>
						</li>
						<li>
							<a href="#index" data-icon="home" data-transition="fade" id="nextPage">Portada</a>
						</li>
					</ul>
				</div>
			</footer>
		</div>
<?php }
// Otros
else {
$nextPage = $content['id'] + 1;
$prevPage = $content['id'] - 1;
$nextPageTitle = $xmlcontent -> Page[$nextPage] -> Title;
?>
		<div data-role="page" <?php if ($content->Img->Image) { ?>class="photoswipe"<?php } ?> data-theme="a" id="page<?php echo $content['id'] ?>">
			<header data-role="header" data-id="exeheader" class="exeheader" data-position="fixed" data-visible-on-page-show="false" data-theme="b">
				<img src="../_assets_jqm/img/logo-exegesis.png" class="headerImg" alt="Revista Exégesis">
				<?php if ($content -> Url != 'no') { ?>
				<div id="share">
					<div id="container-circle">
						<a id="button-1" rel="external" class="btn" target="_blank" href="mailto:?subject=Revista Exégesis - Mensajes &amp;body=Acabo de leer <?php echo $content -> Title ?> y creo que te puede gustar: <?php echo $content -> Url ?>">@</a>
						<a id="button-2" rel="external" class="btn" target="_blank" href="<?php echo $content -> Url ?>#disqus_thread">c</a>
						<a id="button-3" rel="external" class="btn" target="_blank" href="https://plusone.google.com/_/+1/confirm?hl=es&amp;url=<?php echo $content -> Url ?>">g</a>
						<a id="button-4" rel="external" class="btn" target="_blank" href="http://twitter.com/home?status=<?php echo $content -> Title ?> - <?php echo $content -> Url ?>">t</a>
						<a id="button-5" rel="external" class="btn" target="_blank" href="http://facebook.com/share.php?u=<?php echo $content -> Url ?>">f</a>
						<div id="base-button">J<span><br />compatir</span>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php if ($content->Img->Image) { ?>
				<div id="zoom">
<?php $i = 1; foreach ($content->Img->Image as $img) { ?>
					<a href="<?php echo $img ?>" rel="external" class="<?php if ($i == 1) { ?>btAmpliar<?php } else { ?>btOculto<?php } ?>">I<br><span>ampliar</span></a>
<?php $i = $i+1;} ?>
				</div>
				<?php } ?>
			</header>
			<article data-role="content" id="<?php echo $content -> Type ?>">
				<header>
					<h2 id="titlePage"><?php echo $content -> Title ?></h2>
					<p id="autorPage"><?php echo $content -> Autor ?></p>
				</header>
				<div id="contentPage" class="<?php echo $content -> Type ?>">
<?php
if ($content -> Type == 'comic') {
$i = 1; foreach ($content->Img->Image as $img) {
?>
					<img src="<?php echo $img ?>" alt="<?php echo $content -> Title . ' ' . $i ?>">
<?php $i = $i+1;}
}else {
	$textimages = $content->Txt;
	if ($content->Img->Image) {
		$i = 1;
		foreach ($content->Img->Image as $img) {
			$textimages = str_replace('IMG' . $i,'<img src="'.  $img .'" alt="' . $content -> Title . ' ' . $i .'">',$textimages);
			$i = $i+1;
		}
	}
	echo $textimages;
}?>

				</div>
			</article>
			<footer data-role="footer" data-id="exefooter" data-position="fixed" data-visible-on-page-show="false" data-theme="b">
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#page<?php echo $prevPage ?>" data-icon="arrow-l" data-transition="fade" data-direction="reverse" id="previousPage">Atrás</a>
						</li>
						<li>
							<a href="#indice" data-rel="dialog" data-transition="slidedown" data-icon="grid">Índice</a>
						</li>
						<li>
							<a href="#page<?php echo $nextPage ?>" data-icon="arrow-r" data-transition="fade" id="nextPage">Siguiente</a>
						</li>
					</ul>
				</div>
			</footer>
		</div>
<?php }
} ?>
		<div data-role="page" data-theme="b" id="indice">
			<div data-role="content">
				<ul data-role="listview">
					<li>
						<a href="#index"><img src="../_assets_jqm/img/logo-exegesis.png" alt="Revista Exégesis" style="width: 50%;margin: 10px 25%;max-width: 500px;border-radius: 0;"></a>
					</li>
<?php
// loop through XML file to generate the menu
foreach ($xmlcontent as $key => $content) {
if ($content -> Type != 'portada' && $content -> Type != 'about') {
?>
					<li class="menuEntry">
						<a href="#page<?php echo $content['id'] ?>">
							<?php if ($content->Img->Image) { ?>
							<img id="img<?php echo $content['id'] ?>" src="<?php echo $content->Img->Image[0] ?>" alt="">
							<?php } ?>
							<?php echo $content -> Title ?><br />
							<span><?php echo $content -> Autor ?></span>
						</a>
					</li>
<?php }
} ?>
				</ul>
			</div>
			<a href="#" data-role="button" data-theme="a" data-icon="back" data-rel="back">Cerrar</a>
		</div>
		<div id="indicator"></div>
	<body>
</html>