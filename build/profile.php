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

    <title>Profile</title>
</head>

<body style="background-color: rgb(24,25,26);">
    <header class="sticky top-0 z-50">
        <?php include 'navbar.php' ?>
    </header>

    <main class="flex flex-col">
        <section class="relative" style="height: 650px; background-color: #242526">
            <div class="container top-0 bg-center bg-cover mx-auto" style='height: 80%; max-width: 1024px; background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'>
                <div class="absolute bottom-0 mx-auto">
                    <img src="https://nakedsecurity.sophos.com/wp-content/uploads/sites/2/2013/08/facebook-silhouette_thumb.jpg" class="w-32 h-32 rounded-full shadow-lg">
                </div>
            </div>
        </section>
    </main>


    <script src="../node_modules/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>