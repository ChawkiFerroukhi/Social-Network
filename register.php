<?php

    error_reporting(E_ALL);

    
    require_once 'vendor/autoload.php';
    require_once 'core/init.php';

    use classes\{Database, Config, Validation, Common, Session, Token, Hash};
    use models\User;

    if (isset($_POST["register"])) {

        $validate = new Validation();
    
        if (Token::check(Common::getInput($_POST, "token_reg"), "register")) {
    
            $validate->check($_POST, array(
                "firstname" => array(
                    "name" => "Firstname",
                    "min" => 3,
                    "max" => 50
                ),
                "lastname" => array(
                    "name" => "Lastname",
                    "min" => 3,
                    "max" => 50
                ),
                "username" => array(
                    "name" => "Username",
                    "required" => true,
                    "min" => 3,
                    "max" => 40,
                    "unique" => true
                ),
                "email" => array(
                    "name" => "Email",
                    "required" => true,
                    "email-or-username" => true
                ),
                "password" => array(
                    "name" => "Password",
                    "required" => true,
                    "min" => 6
                ),
                "password_again" => array(
                    "required" => true,
                    "matches" => "password"
                ),
            ));
    
            if ($validate->passed()) {
    
                $salt = Hash::salt(16);
    
                $user = new User();
                $user->setData(array(
                    "firstname" => Common::getInput($_POST, "firstname"),
                    "lastname" => Common::getInput($_POST, "lastname"),
                    "username" => Common::getInput($_POST, "username"),
                    "email" => Common::getInput($_POST, "email"),
                    "password" => Hash::make(Common::getInput($_POST, "password"), $salt),
                    "salt" => $salt,
                    "joindate" => date("Y/m/d h:i:s"),
                    "user_type" => 1,
                ));
    
                $user->register();
    
                Session::flash("Register_success", "Your account has been created successfully.");
                header("Location: login.php");
            } else {
                foreach ($validate->errors() as $key => $error) {
                    echo "key:" . $key . ", error : " . $error . "<br>";
                }
            }
        }
    }

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
        <main>
        <div>
                <h2>Register</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method ="post">
                    <div>
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" value="<?php echo htmlspecialchars(Common::getInput($_POST, "firstname")); ?>" placeholder="Firstname" autocomplete="off">
                    </div>
                    <div>
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" value="<?php echo htmlspecialchars(Common::getInput($_POST, "lastname")); ?>" placeholder="Lastname" autocomplete="off">
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo htmlspecialchars(Common::getInput($_POST, "username")); ?>"  placeholder="Username" autocomplete="off">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?php echo htmlspecialchars(Common::getInput($_POST, "email")); ?>" placeholder="Email" autocomplete="off">
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
                        <input type="hidden" name="token_reg" value="<?php echo Token::generate("register"); ?>">
                        <input type="submit" name="register" value="register">
                    </div>
                </form>
            </div>
        </main>
    </body>
    </html>
