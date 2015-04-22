<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'project');
	if($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_error .')'
			. $mysqli->connect_error);
	}
	else {
		echo "Connection made";
	}
$mysqli->close();
?>