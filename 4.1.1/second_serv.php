<?php

//Hämtar värdena för name och email som sedan skivs ut.

$name = $_GET['name'];
$email = $_GET['email'];

header('Content-type: text/plain');
echo "Name: " . $name . "\n";
echo "Email: " . $email;

?>