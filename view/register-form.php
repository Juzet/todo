<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
<h1>Registerkekl ljdlna;s alk la lakdnd ln adk la j lkak l lnak</h1>
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div id="user">
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div id="pass">
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div id="sub">
		<button type="submit">Submit:</button>
	</div>
</form>
