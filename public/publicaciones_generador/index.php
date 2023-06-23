<?php include("/home/tx2z/public_html/revista-exegesis.com/generador_de_publicaciones/password_protect.php"); ?>
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
		<div class="saveBackup">
			<p>
				Guarda los cambios que has hecho hasta ahora y sube las imágenes al servidor
			</p>
			<p>
				(Utilizalo al menos cada 5 páginas creadas)
			</p>
			<br />
			<button id="saveChanges">
				Guardar copia de seguridad
			</button>
		</div>
		<h1>REVISTA EXÉGESIS
		<br />
		Generador de publicaciones</h1>
		<h2>Copias de seguridad:</h2>
		<div class="backupsList">
			<ul>
				<?php
				$dir = 'backups';
				$backupsfiles = scandir($dir, 1);
				foreach ($backupsfiles as $files) {
					if ($files != "." && $files != "..") {
						$fileTitle = substr($files, 0, -5);
						print('<li><a href="index.php?backup=backups/' . $files . '">' . $fileTitle . '</a></li>');
					}
				}
				?>
			</ul>
		</div>
	</header>
	<article>
		<form name="data" enctype="multipart/form-data" action="generator.php" method="post">
			<fieldset class="magazine">
				<label for="magazineNumber">Título de la publicación:</label>
				<input name="magazineNumber" class="magazineNumber" value="" />
				<input name="magazineNumberFake" class="magazineNumberFake" value="" disabled style="display: none;" />
				<a class="magazineNumberOk">OK</a>
				<div class="pagesTotal" style="display: none;">
					<label for="magazinePages">Número total de páginas:</label>
					<input name="magazinePages" value="2" readonly />
				</div>
			</fieldset>
			<div class="assignNumber">
				<p>
					Por favor, asigna primero el título de la publicación. Ten en cuenta que una vez definido no se podrá cambiar.
				</p>
				<p>
					<strong>Cuidado: Si asignas un número o título ya generado anteriormente los datos se sobreescribirán.</strong>
				</p>
				<p>
					Si ya trabajaste anteriormente en un número y guardaste tus progresos, selecciona la copia de seguridad correspondiente en la lista que aparece en la parte de arriba a la izquierda.
				</p>
			</div>
			<div class="hideForm" style="display: none">
				<fieldset data-page="Portada">
					<legend>
						PORTADA
					</legend>
					<input name="000[Type]" value="portada" type="hidden" />
					<label for="000[Txt][1]">Imagen 1:</label>
					<input name="000[Txt][1]" placeholder="Texto de la imágen 1 (Título de la publicación)" />
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="000[Img][1]" />
					<input type="file" name="000upload[1]" />
					<label for="000[Txt][2]">Imagen 2:</label>
					<input name="000[Txt][2]" placeholder="Texto de la imágen 2 (Opcional)" />
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="000[Img][2]" />
					<input type="file" name="000upload[2]" />
					<label for="000[Txt][3]">Imagen 3:</label>
					<input name="000[Txt][3]" placeholder="Texto de la imágen 3 (Opcional)" />
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="000[Img][3]" />
					<input type="file" name="000upload[3]" />
					<label for="000[Txt][4]">Imagen 4:</label>
					<input name="000[Txt][4]" placeholder="Texto de la imágen 4 (Opcional)" />
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="000[Img][4]" />
					<input type="file" name="000upload[4]" />
					<!-- Only 4 images
					<label for="000[Txt][5]">Imagen 5:</label>
					<input name="000[Txt][5]" placeholder="Texto de la imágen 5" />
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="000[Img][5]" />
					<input type="file" name="000upload[5]" />
					<label for="000[Txt][6]">Imagen 6:</label>
					<input name="000[Txt][6]" placeholder="Texto de la imágen 6" />
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="000[Img][6]" />
					<input type="file" name="000upload[6]" />
					-->
				</fieldset>
				<fieldset data-page="about">
					<legend>
						Sobre esta página
					</legend>
					<input name="About[Type]" value="about" type="hidden" />
					<label for="About[Title]">Título:</label>
					<input name="About[Title]" value="Sobre Exégesis" />
					<label for="About[Txt]">Texto:</label>
					<a class="editTexarea">Editar texto</a>
					<textarea name="About[Txt]" style="display: none;">
						<p style="text-align:center">
							<strong>Recuerda que puedes guardar esta aplicación en tu tablet o dispositivo móvil y leerla cuando quieras, incluso estando desconectado de internet.</strong>
						</p>
						<p>
							<strong>Desde un dispositivo Android:</strong>
						</p>
						<p>
							Sitúate en la portada de la aplicación y pulsa en la estrella que aparece al lado de la barra de navegación. Aparecerá un menú donde podrás añadir la página a tu "Escritorio" o "Home Screen".
						</p>
						<p>
							<strong>Desde iOS (iPhone o iPad):</strong>
						</p>
						<p>
							Sitúate en la portada de la aplicación, pulsa en el icono compuesto por un cuado con una flecha y selecciona "Añadir a la pantalla de Inicio" o "Add to Home Screen".
						</p>
						<br /><br />
						<p>
							Fundada en 2009 como la única publicación on-line en español centrada en el cómic y la ciencia ficción, Revista Exégesis ofrece en su web (<a href="http://www.revista-exegesis.com" target="_blank">http://www.revista-exegesis.com</a>) varias publicaciones semanales, compiladas cada dos meses en un número digital – descargable en formatos .pdf y .cbr/.cbz - y esta versión para tablets y dispositivos portátiles en formato html.
						</p>
						<p>
							Desde sus inicios, Exégesis destaca por la ingente cantidad de autores que colaboran en sus páginas, procedentes de diversos países situados a ambos lados del océano Atlántico. Fue en la segunda etapa de la revista cuando se extendieron sus fronteras al incluir trabajos de autores de habla inglesa; procedentes de Reino Unido, Estados Unidos y Australia. Asimismo se consolidó el actual canon de calidad, manteniendo un claro rigor en las maquetaciones de las compilaciones, como en los contenidos de los proyectos a publicar.
						</p>
						<p>
							En Exégesis confluyen autores de diversas disciplinas del arte escrito e ilustrado, que son quienes dan vida realmente a la revista. En ella se encuentran escritores, guionistas, dibujantes, ilustradores, entintadores, coloristas, rotulistas y maquetadores. Esto hace que la revista ofrezca un interesante punto de encuentro en el que diferentes creativos pueden promocionarse y buscar colaboradores para nuevos proyectos.
						</p>
						<p>
							La ciencia ficción, el cómic y la ilustración tienen hoy en Exégesis una publicación rica en matices, con gran capacidad para la reinvención y siempre dispuesta a adaptarse a nuevos retos.
						</p>
					</textarea>
				</fieldset>
				<fieldset data-page="001">
					<legend>
						Editorial
					</legend>
					<label for="001[Title]">Título:</label>
					<input name="001[Title]" value="Editorial" required />
					<label for="001[Type]">Tipo:</label>
					<select class="selectType" name="001[Type]">
						<option value="editorial" selected="selected">Editorial</option>
					</select>
					<label for="001[Autor]">Autor o Autores:</label>
					<input name="001[Autor]" value="Por: Peio Soria" required />
					<label for="001[Img]">Imágenes:</label>
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="001[Img][1]" data-imgnumber="1" />
					<input type="file" name="001upload[1]" data-imgnumber="1" />
					<a class="addImg">+ Añadir imagen</a>
					<label for="001[Txt]">Texto:</label>
					<a class="editTexarea">Editar texto</a>
					<textarea name="001[Txt]" style="display: none;"></textarea>
					<label for="001[Url]">Url:</label>
					<input name="001[Url]"  placeholder="Enlace a la página de Exégesis" />
				</fieldset>
				<fieldset data-page="002">
					<legend>
						Página 1
					</legend>
					<label for="002[Title]">Título:</label>
					<input name="002[Title]" value="" required />
					<label for="002[Type]">Tipo:</label>
					<select class="selectType" name="002[Type]">
						<option value="comic">Cómic</option>
						<option value="relato">Relato</option>
						<option value="baulera">Baulera</option>
					</select>
					<label for="002[Autor]">Autor o Autores:</label>
					<input name="002[Autor]" value="" placeholder="Dibujo: Pepito Pérez | Guión: Juanito Juanes" />
					<label for="002[Img]">Imágenes:</label>
					<a class="editImg" style="display: none">Cambiar imagen</a>
					<input type="text" style="display: none" readonly value="" name="002[Img][1]" data-imgnumber="1" />
					<input type="file" name="002upload[1]" data-imgnumber="1" />
					<a class="addImg">+ Añadir imagen</a>
					<label for="002[Txt]" class="labelTextarea" style="display: none;">Texto:</label>
					<a class="editTexarea" style="display: none;">Editar texto</a>
					<textarea name="002[Txt]" disabled style="display: none;"></textarea>
					<label for="002[Url]">Url:</label>
					<input name="002[Url]"  placeholder="Enlace a la página de Exégesis" />
				</fieldset>
				<a class="newFieldset">AÑADIR PÁGINA</a>
				<fieldset class="send">
					<input type="submit" value="Enviar" />
				</fieldset>
			</div>
			<textarea id="pageCode" name="pageCode" style="display: none;"></textarea>
		</form>
	</article>
	<footer>
		<p>
			<small>Revista Exégesis</small>
		</p>
	</footer>
	<div class="tinymce_popup" style="display: none;">
		<textarea class="tinymce_editor"></textarea>
		<button class="saveTextarea">
			guardar
		</button>
		<div class="imgInfo">Puedes insertar las imágenes previamente subidas a la página en medio del texto escribiendo "IMG1", "IMG2", "IMG3"... etc (sin las comillas).</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		window.jQuery || document.write("<script src='_assets/js/jquery.js'>\x3C/script>")
	</script>
	<script src="_assets/js/tiny_mce/jquery.tinymce.js"></script>
	<script src="_assets/js/functions.js"></script>
</body>
</html>