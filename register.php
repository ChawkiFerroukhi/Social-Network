<?php

    error_reporting(E_ALL);

    require_once 'core/init.php';
    require_once 'vendor/autoload.php';

    use classes\Config;
    use classes\Database;
    use models\User;

?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>
        <?php include "header.php"; ?>
        <main>
            <div>
                <h2>Register</h2>
                <form action="" method ="post">
                    <div>
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" placeholder="Firstname" autocomplete="off">
                    </div>
                    <div>
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" placeholder="Lastname" autocomplete="off">
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Email" autocomplete="off">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" autocomplete="off">
                    </div>
                    <div>
                        <label for="passwod_again">Repeat your password</label>
                        <input type="password" name="password_again" placeholder="Repeat your password" autocomplete="off">
                    </div>
                    <div>
                        <input type="submit" value="register">
                    </div>
                </form>
            </div>
        </main>
    </body>
    </html>
