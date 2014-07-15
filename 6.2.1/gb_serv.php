<?php
	
	$name = mysql_real_escape_string(strip_tags($_POST['name']));
	$email = mysql_real_escape_string(strip_tags($_POST['email']));
	$webpage = mysql_real_escape_string(strip_tags($_POST['webpage']));
	$comment = mysql_real_escape_string(strip_tags($_POST['comment']));
	
	mysql_connect("localhost", "root", "root") or die (mysql_error());
	mysql_select_db("web_db") or die(mysql_error());

	mysql_query("INSERT INTO guestbook (name, email, webpage, comment)
	VALUES ('$name', '$email', '$webpage', '$comment')") or die(mysql_error());

	header('Location: ' . getenv('HTTP_REFERER'));	

?>