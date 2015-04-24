<?php
    // require a config.php file in the model folder
    // have access to the variables int the config.php file
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");

    if (!authenticateUser()) {
        header("Location: " . $path . "start.php");
        die();
    }
?>
<nav>
    <ul>
        <!-- create a link that point to the post file -->
         <li><a href="<?php echo $path. "login.php" ?>">Blog Post Form</a></li>
          <li><a href="<?php echo $path. "register.php" ?>">Blog Post Form</a></li>
    </ul>
</nav>