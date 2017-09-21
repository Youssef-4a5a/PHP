<?php session_start(); ?>
<?php error_reporting(0) ?>
<html>
    <body>
        <?php
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        if (!isset($_SESSION["login"])) {
            $_SESSION["login"] = false;
        } else {
            if ($user == "open" && $pass == "sesame") {
                $_SESSION["login"] = true;
            }
        }

        if (isset($_POST["logout"]) == true) {
            $_SESSION["login"] = false;
            session_destroy();
        }


        if ($_SESSION["login"] == false) {
            ?>
            <form action="" method="post" id="login">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="submit" value="Log in">
            </form>
            <?php
        } else {
            echo "U bent ingelogd";
            ?>
            <form action="" method="POST">
                <input type="submit" name="logout" value="Log uit">
            </form>
            <?php
        }
        ?>
    </body>
</html>

