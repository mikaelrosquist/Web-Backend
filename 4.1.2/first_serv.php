<?php

//Sätter $name till det värde som skickats med POST-metoden.
$name = $_POST['name'];

//läser in HTML-sidan second_page där ---$name--- ersätts med värdet hos $name.
$html = file_get_contents("second_page.html");
eval("print \"" . addcslashes(preg_replace("/(---(.+?)---)/", "\\2", $html), '"') . "\";");

?>