<!doctype html>
<head id="www-sitename-com" data-template-set="html5-reset">
	<meta charset="utf-8">

	<title>Generador de publicaciones - Exégesis</title>

	<meta name="author" content="@tx2z - Jesús Pérez">
	<meta name="Copyright" content="Copyright Jesús Pérez 2012. All Rights Reserved.">

	<link rel="shortcut icon" href="favicon.ico">

	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="_assets/css/style.css">
</head>
<body class="preload">
	<header>
		<h1>REVISTA EXÉGESIS
		<br />
		Generador de publicaciones</h1>
	</header>
	<article>
		<div class="assignNumber">
			<?php if ($_GET["page"]) {
			?>
			<p>
				Parece que todo ha ido bien :)
			</p>
			<p>
				Puedes probar la página que acabas de generar haciendo click <a target="_blank" href="tester/tester.php?page=<?php echo $_GET["page"] ?>&name=<?php echo $_GET["name"] ?>">aquí</a>.
			</p>
			<p>
				Una vez abierto puedes copiar la URL y utilizarla en cualquier otro navegador o dispositivo. Recuerda que para verla correctamente necesitarás un navegador con WebKit (Safari o Google Chrome). Incluso en estos navegadores puede tener algún fallo estético. Lo mejor sería probarlo directamente en un tablet o teléfono móvil o <a href="http://osxdaily.com/2012/02/23/android-4-ics-virtualbox/">instalar una máquina virtual android en tu ordenador</a>(las instrucciones valen para Mac, Windows y Linux)
			</p>
			<p>
				<strong>No compartas el enlace, es sólo para pruebas internas.</strong>
			</p>
			<p>
				Una vez testado todo, vamos a publicar la página.
			</p>
			<form name="data" enctype="multipart/form-data" action="publicator.php" method="post">
				<fieldset class="magazine" style="width: 700px;">
					<input name="pagetester" type="hidden" value="<?php echo $_GET["page"] ?>" />
					<input name="nametester" type="hidden" value="<?php echo $_GET["name"] ?>" />
					<p>
						Primero genera el icono para la aplicación. Puedes bajar el PSD para generalo de este enlace: <a href="iOS-Icon.psd">iOS-Icon.psd</a>.<br />Guardalo con formato ".png" e introdúcelo en el sigiente campo (si no seleccionas ningún icono la aplicación utilizará el icono por defecto)
					</p>
					<label for="pubicon">Icono de la publicación:</label>
					<br />
					<input type="file" name="pubicon" class="pubicon" />
					<p>
						Después elige la URL donde se va a publicar la página (recuerda no utilizar espacios ni acentos en la URL).
					</p>
					<label for="puburl">URL para la publicación:</label>
					<br />
					http://revista-exegesis.com/publicaciones/
					<input name="puburl" class="magazineNumber" value="" required style="text-align: left;" />
					<p>
						¡Ya está todo! haz click en "Publicar" y espera a que se suba el icono y se genere la página (no debería tardar mucho).
					</p>
					<button>
						Publicar!
					</button>
				</fieldset>
			</form>
			<p>
				Listado de URLs ya utilizadas o reservadas por el sistema (en rojo). Si usas el mismo valor no ocurrirá nada:
			</p>
			<div class="columns">
				<ul>
					<?php
					//path to directory to scan
					$directory = "../publicaciones/";

					//get all files in specified directory
					$files = glob($directory . "*");

					//print each file name
					foreach ($files as $file) {
						//check to see if the file is a folder/directory
						if (is_dir($file)) {
							$file = substr($file, 17);
							if ($file != '_assets_jqm' && $file != 'source' ) {
								echo '<li>' . $file . '</li>';
							}else{
								echo '<li style="color: red">' . $file . '</li>';
							}
							
						}
					}
					?>
				</ul>
			</div>
			<?php } else { ?>
			<h1>¡Conseguido!</h1>
			<p>
				La url de la publicación que acabas de generar es: <a href="http://revista-exegesis.com/publicaciones/<?php echo $_GET["newurl"] ?>">http://revista-exegesis.com/publicaciones/<?php echo $_GET["newurl"]
				?></a>
			</p>
			<p>
				Un saludo y ¡hasta la próxima!
			</p>
			<br />
			<br />
			<br />
			<p><img src="_assets_jqm/img/logo-exegesis.png" alt="revista exegesis" />
			</p>
			<?php } ?>
		</div>
	</article>
	<footer>
		<p>
			<small>Revista Exégesis</small>
		</p>
	</footer>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		window.jQuery || document.write("<script src='_assets/js/jquery.js'>\x3C/script>")
	</script>
	<script>
		(function($) {
			$(document).ready(function() {
				$('input:file').live('change', function() {
					var ext = $(this).val().split('.').pop().toLowerCase();
					var allow = new Array('png');
					if(jQuery.inArray(ext, allow) == -1) {
						alert('Solamente se permiten archivos con extensión .png');
						$(this).val('');
					}
				});
			});
		})(window.jQuery);
	</script>
</body>
</html>