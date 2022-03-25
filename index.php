<?php

    
    require_once "vendor/autoload.php";
    require_once "core/init.php";

    use classes\{Database, Config, Validation, Common, Session, Token, Hash, Redirect, Cookie};

    if(!$user->getPropertyValue("isLoggedIn")) {
        Redirect::to("login.php");
    }

    /*if (Session::exists('Register_success')) {
        echo Session::flash('Register_success');
    }*/

    
    if(isset($_POST["logout"])) {
        $user->logout();
        Redirect::to("login.php");
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialNetwork</title>
</head>
<body>

    <?php echo "<p>Hello " . $user->getPropertyValue('username') . "</p>"; ?>


    <form action="index.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>


</body>
</html>