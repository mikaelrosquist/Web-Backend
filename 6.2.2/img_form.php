<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="img_serv.php" method="post" enctype="multipart/form-data">
		<table>
			<tr><td>Name:</td> <td><input type="text" name="name"></td></tr>
			<tr><td>E-mail:</td> <td><input type="text" name="email"></td></tr>
			<tr><td>Webpage:</td> <td><input type="text" name="webpage"></td></tr>
			<tr><td>Image:</td> <td><input type="file" name="file"></td></tr>
			<tr><td>Comment:</td> <td><textarea rows="8" cols="30" name="comment"></textarea></td></tr>
		</table>
		<input type="submit" value="Submit">
	</form>


<?php
	mysql_connect("localhost", "root", "root") or die (mysql_error());
	mysql_select_db("web_db") or die(mysql_error());
	$result = mysql_query("SELECT * FROM guestbook ORDER BY id DESC") or die(mysql_error());
	
	
	while ($row = mysql_fetch_array($result)) {
		echo '<hr />';
		echo '<p><strong>Entry:</strong>' . $row['id'] . '</p>';
		echo '<p>';
		echo '<strong>Time:</strong>' . $row['timestamp'] . '<br>';
		echo '<strong>From:</strong> <a href="http://' . $row['webpage'] . '">webpage</a> <br>';
		echo '<strong>E-mail:</strong> <a href="Mailto:' . $row['email'] . '">email</a>';
		echo '</p>';
		echo '<p><strong>Comment:</strong>' . $row['comment'] . '</p>';
		echo '<p> <img src="img_get.php?id=' . $row['id'] . '"></p>';
	}
?>

</body>
</html>