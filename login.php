<?php

error_reporting(E_ALL);


require_once 'vendor/autoload.php';
require_once 'core/init.php';

use classes\{Database, Config, Validation, Common, Session, Token, Hash, Redirect};
use models\User;

if ($user->getPropertyValue("isLoggedIn")) {
    Redirect::to("index.php");
}

if (isset($_POST["login"])) {

    if (Token::check(Common::getInput($_POST, "token_log"), "login")) {
        $validate = new Validation();

        $validate->check($_POST, array(
            "email-or-username" => array(
                "name" => "Email or username",
                "required" => true,
                "email-or-username" => true
            ),
            "password" => array(
                "name" => "Password",
                "required" => true
            )
        ));

        if ($validate->passed()) {

            $rememberme = isset($_POST["rememberme"]) ? true : false;
            $login = $user->login(Common::getInput($_POST, "email-or-username"), Common::getInput($_POST, "password"), $rememberme);

            if ($login) {
                Redirect::to("index.php");
            } else {
                echo "Bad Credentials";
            }
        } else {

            foreach ($validate->errors() as $error) {
                echo $error . "<br>";
            }
        }
    }
}

if(isset($_POST["register"])) {
    header("Location: register.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body style="background-color: rgb(24,25,26);">
    <section class="text-gray-600 body-font">
        <div class="container px-24 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-3/5">
                    <div class="mb-6">
                        <h3 class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">
                            Logo here
                        </h3>
                        <h3 class="font-medium leading-tight text-2xl mt-0 mb-2 text-white">
                            Information
                        </h3>
                    </div>
                    <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime, temporibus amet corporis dolores, tenetur dolorum quis culpa deserunt omnis deleniti minus nemo libero! Labore recusandae perspiciatis voluptate veniam illum!</p>
                </div>
                <div class="p-4 md:w-2/5">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="shadow-xl rounded-xl px-8 pt-6 pb-8 mb-4" style="background-color: rgb(36,37,38);">
                        <?php
                            $validate = new Validation();
                           foreach ($validate->errors() as $error) {
                                echo $error . "<br>";
                            } 
                         ?>
                        <div class="mb-4">
                            <input class="shadow appearance-none rounded w-full py-3 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" type="text" id="username" name="email-or-username" value="<?php echo htmlspecialchars(Common::getInput($_POST, "email-or-username")); ?>" placeholder="Email or username" style="background-color: rgb(58,59,60);">
                        </div>
                        <div class="mb-6">
                            <input class="shadow appearance-none rounded w-full py-3 px-3 text-white mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="Password" style="background-color: rgb(58,59,60);">
                        </div>
                        <div class="mb-6">
                            <input type="hidden" name="token_log" value="<?php echo Token::generate("login"); ?>">
                            <input type="submit" name="login" value="login" class="text-white w-full font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" style="background-color: rgb(78,79,80);">
                        </div>
                        <div class="mb-6">
                            <a class="flex m-auto justify-center font-bold text-sm text-blue-600 hover:text-blue-800" href="#">
                                Forgot Password?
                            </a>
                        </div>
                        <hr>
                        <div class="mt-6 flex justify-center">
                            <button class="text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline" name="register" style="background-color: rgb(78,79,80);">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>