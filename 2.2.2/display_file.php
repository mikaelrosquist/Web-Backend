<?php

//Kontrollerar om en fil skickats med, om inte skrivs "No file chosen" ut.
if ($_FILES["file"]["error"] > 0) {
	header('Content-type: text/plain');
	echo "No file chosen.", "\n";
}
// Kontrollerar filens storlek, får inte vara större än 2MB.
else if ($_FILES["file"]["size"] > 2097152) {
	header('Content-type: text/plain');
	echo "File too big, can not be larger than 2MB";	
}

//Om filen är av typen png, jpeg eller plain text så visas filen direkt i webbläsaren.
else if (($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "text/plain")) { 

	//Kontrollerar att filen laddats upp med metoden POST och flyttar i så fall filen till given destination. Detta görs bara för
	//filer av typen .png, .jpeg och .txt.
	move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $_FILES["file"]["name"]);

	//Om filen är image/png så visas den i webbläsaren.
	if ($_FILES["file"]["type"] == "image/png") {
		$img = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] .'/uploads/' . $_FILES["file"]["name"]);
		header('Content-Type: image/png');
		imagepng($img);
		imagedestroy($img);
	}

	//Om filen är image/jpeg så visas den i webbläsaren.
	else if ($_FILES["file"]["type"] == "image/jpeg") { 
		$img = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'] .'/uploads/' . $_FILES["file"]["name"]);
		header('Content-Type: image/jpeg');
		imagejpeg($img);
		imagedestroy($img);
	}

	//Om filen är text/plain så visas den i webbläsaren.
	else if ($_FILES["file"]["type"] == "text/plain") {
		$txtFile = $_SERVER['DOCUMENT_ROOT'] .'/uploads/' . $_FILES["file"]["name"];
		$openFile = fopen($txtFile, 'r'); 
		$readFile = fread($openFile, filesize($txtFile));
		fclose($openFile);
		header('Content-type: text/plain');
		echo $readFile;
	}
}
//Om filen är av någon annan typ än de ovan skrivs filnamn, typ och storlek ut.
else {
	header('Content-type: text/plain');
	echo "Filename: " . $_FILES["file"]["name"] . "\n";
	echo "Mime Type: " . $_FILES["file"]["type"] . "\n";
	echo "Size: " . ($_FILES["file"]["size"]) . " byte";
}

?>