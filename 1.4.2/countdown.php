<?php 
header("Content-type: multipart/x-mixed-replace; boundary=III");
echo "\n--endofsection\n";

$cd = 10;

while ($cd > 0) {
	displayTime($cd);
	$cd--;
	sleep(1);
}

echo "--III--\n";

function displayTime($cd) {
	echo "Content-type: text/plain\n\n";
	echo "Time: " . date("D d M Y H:i:s") . "\n";
	echo "Countdown: $cd";
	echo "--III\n";
	ob_flush();
	flush();
}

?>