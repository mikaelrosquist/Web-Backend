<?php
	
	$name = mysql_real_escape_string(strip_tags($_POST['name']));
	$email = mysql_real_escape_string(strip_tags($_POST['email']));
	$webpage = mysql_real_escape_string(strip_tags($_POST['webpage']));
	$comment = mysql_real_escape_string(strip_tags($_POST['comment']));
	$mime = $_FILES["file"]["type"];
	$tmp_img = $_FILES["file"]["tmp_name"];

	mysql_connect("localhost", "root", "root") or die(mysql_error());
	mysql_select_db("web_db") or die(mysql_error());

	$fp = fopen($tmp_img, 'r');
	$img_file = fread($fp, filesize($tmp_img));
	$img_file = addslashes($img_file);
	fclose($fp);

	mysql_query("SET AUTOCOMMIT=0");
	mysql_query("START TRANSACTION");

	$a1 = mysql_query("INSERT INTO guestbook (name, email, webpage, comment) VALUES('$name', '$email', '$webpage', '$comment')");
	$a2 = mysql_query("INSERT INTO image (mime, img) VALUES('$mime', '$img_file')");

	if ($a1 and $a2) {
	    mysql_query("COMMIT");
	} else {        
	    mysql_query("ROLLBACK");
	}

	header('Location: ' . getenv('HTTP_REFERER'));	

?>