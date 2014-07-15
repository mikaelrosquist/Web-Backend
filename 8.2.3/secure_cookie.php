<?php

if(!isset($_COOKIE['nameCookie'])){
	setcookie("timeCookie", date("D, d M Y H:i:s"), time()+10800);
	setcookie("nameCookie", "Kakan", time()+10800);
	echo "You just recieved a cookie! View it "; ?><a href="http://localhost:8888/4.2/cookie_display.php/">here</a><?php echo ".";
}

else{
	echo "You have already got a cookie, click "?> <a href="http://localhost:8888/4.2/cookie_display.php/">here</a> <?php echo " to view it.";
}

?>