<?php

	//Filen med antalet besökare
	$visitFile = 'visits.txt';
	
	//Öppnar filen med antalet beökare för läsning
	$openFile = fopen($visitFile, 'r'); 
	
	//Skapar $visits och sätter den till antalet i visits.txt + 1
	$visits = fgets($openFile) + 1;
	
	//Stänger filen
	fclose($openFile);

	//Öppnar filen för skrivning
	$openFile = fopen($visitFile, 'w');

	//Skriver över antalet besökare med det nya värdet och stänger filen igen
	fwrite($openFile, $visits);
	fclose($openFile);

	//Läser in hela HTML-filen och ersätter i detta fall "---$visits---" med php-variabeln $visits.
	$html = file_get_contents("counter_display.html");
	eval("print \"" . addcslashes(preg_replace("/(---(.+?)---)/", "\\2", $html), '"') . "\";");
?>