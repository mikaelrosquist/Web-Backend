<?php

//Hämtar värdena för name och email som sedan skivs ut.

$name = $_POST['name'];
$email = $_POST['email'];

header('Content-type: text/plain');
echo "Name: " . $name . "\n";
echo "Email: " . $email;

?>