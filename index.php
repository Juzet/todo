<!DOCTYPE html>
<html>
<head>
	<title>Login Thing</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
				<<?php require("includes/connect.php"); ?>
			</ul>
		</div>
<form class="add-new-task" autocomplete="off">
	<input type="text" name="new-task" placeholder="Add new item...."/>
</form>
	</div>
</body>
</html>