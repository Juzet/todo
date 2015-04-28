<?php
    // require a config.php file in the model folder
    // have access to the variables int the config.php file
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");

    if (!authenticateUser()) {
            die();
    }
    else {

    }
?>
<nav>
    <ul>
        <!-- create a link that point to the post file -->
        <div id="box">
            <a href="<?php echo $path. "login.php" ?>"><p id="box">Login</p></a>
        </div>
        <div id="box2">
            <a href="<?php echo $path. "register.php" ?>"><p id="box2">Register</p></a>
        </div>
    </ul>
</nav>