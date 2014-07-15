<?php

if ($_POST['password'] == '1234') {

	
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'] . "\n\n Observera! Detta meddelande är sänt från ett formulär på Internet och avsändaren kan vara felaktig!";;	
	$from = $_POST['from'];
	$cc = $_POST['cc'];
	$bcc = $_POST['bcc'];

	$headers =	"From: " . $from . "\r\n" .
				"Reply-To" . $from . "\r\n" .
				"Cc: " . $cc . "\r\n" .
				"Bcc: " . $bcc;

	mail($to, $subject, $message, $headers);

	header('Content-type: text/plain');
	echo "Your E-mail has been sent!";
}

else {
	header('Content-type: text/plain');
	echo "Wrong password. E-mail not sent.";
}

?>