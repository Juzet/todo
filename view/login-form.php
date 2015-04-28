<?php
  require_once(__DIR__ . "/../model/config.php");

 ?>
<div id="log">
 	LOGIN
</div>
<form method="post" action="<?php echo $path . "index.php" ?>"> 	
  <div id="us">
		<label for="username">Username: </label>
		<input id="u" type="text" name="username" />
	</div>

	<div id="pa">
		<label for="password">Password: </label>
		<input id="p" type="password" name="password" />
	</div>

	<div id="sub">
		<input id="login" type="submit" value="LOGIN!" />
	</div>
</form>

