<?php
header('Content-type: text/plain');

//Hämtar de tre parametrarna name, id och email från url:en och skriver ut dessa.
echo "Name: ", ($_GET["name"]), "\n";
echo "ID: ", ($_GET["id"]), "\n";
echo "Email: ", ($_GET["email"]);

?>