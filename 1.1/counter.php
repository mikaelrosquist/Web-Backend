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

	header('Content-type: text/plain');
	
	//Skriver ut antal besök
	echo $visits;
?>