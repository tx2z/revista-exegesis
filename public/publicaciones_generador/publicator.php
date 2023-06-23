<?php
ob_start();
session_start();

// Clean string for URLs
function cleanForURL($string) {
	$string = htmlentities(strtolower($string));
	$string = preg_replace("/&(.)(acute|cedil|circ|ring|tilde|uml);/", "$1", $string);
	$string = preg_replace("/([^a-z0-9]+)/", "_", html_entity_decode($string));
	$string = trim($string, "_");
	return $string;
}

// Create static html from php file
function wwwcopy($link, $file) {
	$fp = @fopen($link, "r");
	while (!feof($fp)) {
		$cont .= fread($fp, 1024);
	}
	fclose($fp);

	$fp2 = @fopen($file, "w");
	fwrite($fp2, $cont);
	fclose($fp2);
}

//Define publish folder
$url_folder = cleanForURL($_POST['puburl']);
$target_folder = '../publicaciones/' . $url_folder . '/';

//Creating folder
mkdir($target_folder);

//Adding manifest.php
copy('generics/manifest.php', $target_folder . 'manifest.php');

//Adding icons
copy('generics/favicon.ico', $target_folder . 'favicon.ico');
if (!$_FILES['pubicon']['tmp_name']) {
	copy('generics/apple-touch-icon.png', $target_folder . 'apple-touch-icon.png');
} else {	
	move_uploaded_file($_FILES['pubicon']['tmp_name'], $img_icon);
}

// Create file
wwwcopy('http://revista-exegesis.com/generador_de_publicaciones/tester/tester.php?page=' . $_POST['pagetester'] . '&name=' . $_POST['nametester'], $target_folder . 'index.html');

$url = 'ok.php?newurl=' . $url_folder;

// clear out the output buffer
while (ob_get_status()) {
	ob_end_clean();
} 

// redirect
header("Location: $url");
?>