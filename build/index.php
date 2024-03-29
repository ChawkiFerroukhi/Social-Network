<?php


require_once "vendor/autoload.php";
require_once "core/init.php";

use classes\{Database, Config, Validation, Common, Session, Token, Hash, Redirect, Cookie};

if (!$user->getPropertyValue("isLoggedIn")) {
    Redirect::to("login.php");
}

/*if (Session::exists('Register_success')) {
        echo Session::flash('Register_success');
    }*/


if (isset($_POST["logout"])) {
    if (Token::check(Common::getInput($_POST, "token_log"), "logout")) {
        $user->logout();
        Redirect::to("login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">

    <title>SocialNetwork</title>
</head>

<body style="background-color: rgb(24,25,26);">

    <header class="sticky top-0 z-50">
        <?php include 'navbar.php' ?>
    </header>
    <?php echo "<p class='text-blue-500 text-4xl'>Hello " . $user->getPropertyValue('username') . "</p>"; ?>


    <form action="index.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>

    <script src="../node_modules/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>