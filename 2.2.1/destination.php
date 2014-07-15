<?php
header('Content-type: text/plain');

echo "Name: ", ($_POST["name"]), "\n";
echo "Email: ", ($_POST["email"]), "\n";
echo "Occupation: ", ($_POST["occupation"]), "\n";

/* Skriver ut de checkboxar som är ikryssade. Ett "," skrivs ut om det är fler än en 
checkbox ikryssad. Använder därför en for-loop med en if-sats istället för foreach. */
echo "Current course(s): ";
$checkboxes = $_POST['course'];
$length = count($checkboxes);
for ($i = 0; $i < $length; $i++) {
	echo $checkboxes[$i];
	if ($length > 1 && $i != $length-1)
		echo ", ";
}
echo "\n";

echo "Favorite fruit: ", ($_POST["fruit"]), "\n";
echo "About: ", ($_POST["about"]), "\n";
?>