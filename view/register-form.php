<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
<h1>REGISTER</h1>
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div id="user">
		<label for="username">Username: </label>
		<input id="u2" type="text" name="username" />
	</div>

	<div id="pass">
		<label for="password">Password: </label>
		<input id="p2" type="password" name="password" />
	</div>

	<div id="sub">
		<input id="register" type="submit" value="REGISTER!" />
	</div>
</form>
