<?php
ob_start();

// Clean string for URLs
function cleanForURL($string) {
	$string = htmlentities(strtolower($string));
	$string = preg_replace("/&(.)(acute|cedil|circ|ring|tilde|uml);/", "$1", $string);
	$string = preg_replace("/([^a-z0-9]+)/", "_", html_entity_decode($string));
	$string = trim($string, "_");
	return $string;
}

/* Place the images in the server */
function place_images() {
	/**
	 * Fixes the odd indexing of multiple file uploads from the format:
	 *
	 * $_FILES['field']['key']['index']
	 *
	 * To the more standard and appropriate:
	 *
	 * $_FILES['field']['index']['key']
	 *
	 * @param array $files
	 * @author Corey Ballou
	 * @link http://www.jqueryin.com
	 */
	function fixFilesArray(&$files) {
		$names = array('name' => 1, 'type' => 1, 'tmp_name' => 1, 'error' => 1, 'size' => 1);

		foreach ($files as $key => $part) {
			// only deal with valid keys and multiple files
			$key = (string)$key;
			if (isset($names[$key]) && is_array($part)) {
				foreach ($part as $position => $value) {
					$files[$position][$key] = $value;
				}
				// remove old key reference
				unset($files[$key]);
			}
		}
	}

	// Parent folder where the files are going to be placed
	$magazine_number = cleanForURL($_POST['magazineNumber']);
	$magazine_pages = $_POST['magazinePages'] -1;
	$target_path = 'source/' . $magazine_number;
	mkdir($target_path);

	for ($i = 0; $i <= $magazine_pages; $i++) {

		// Folder where the files are going to be placed
		$target_page = $target_path . '/page' . $i . '/';
		mkdir($target_page);

		fixFilesArray($_FILES[ '00' . $i . 'upload']);
		foreach ($_FILES[ '00' . $i . 'upload'] as $position => $file) {
			$file_name = cleanForURL($file['name']);
			$target_dir = $target_page . basename($file_name) . '.jpg';
			move_uploaded_file($file['tmp_name'], $target_dir);
		}
	}

}

/* Calling the function to place the images in the server */
place_images();

/* Creating a new file and writing the content in it */
$magazine_number = cleanForURL($_POST['magazineNumber']);
$fecha = time ();
$fileName = 'backups/' . $magazine_number . '-' . date ( 'y-m-d-Gis' , $fecha ) . '.html';
$fileHandle = fopen($fileName, 'w') or die("can't open file");
$stringData = $_POST['pageCode'];
fwrite($fileHandle, $stringData);
fclose($fileHandle);


$url = 'index.php?backup=' . $fileName;

// clear out the output buffer
while (ob_get_status()) {
	ob_end_clean();
}

// redirect
header("Location: $url");

?>