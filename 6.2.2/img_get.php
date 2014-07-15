<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("web_db") or die(mysql_error());

$q = mysql_query("SELECT * FROM image WHERE id = " . $_GET['id']) or die(mysql_error());
$row = mysql_fetch_assoc($q);

header('Content-type: ' . $row['mime']);
echo $row['img'];
?>