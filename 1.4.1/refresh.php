<?php

header("Refresh: 1;url='http://localhost:8888/1.4.1/refresh.php'");

header ('Content-type: image/png');

$img = imagecreate(246, 38);

$bg = imagecolorallocate($img, 150, 150, 150);
$tc = imagecolorallocate($img, 50, 50, 50);

$time = date("D, d M Y H:i:s");
imagestring($img, 5, 10, 10, $time, $tc);

imagepng($img);
imagedestroy($img);
?>