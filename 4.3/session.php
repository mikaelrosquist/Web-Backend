<?php
session_start();

if(isset($_SESSION['hits'])) {
	$_SESSION['hits']=$_SESSION['hits']+1;
	for ($i = 0; $i < $_SESSION['hits']; $i++){
		echo " | ";
	}
} else {
	$_SESSION['hits']=1;
	echo "| ";
}
?>