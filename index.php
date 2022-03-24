<?php

    require_once "core/init.php";
    require_once "vendor/autoload.php";

    use classes\{Database, Config, Validation, Common, Session, Token, Hash};
    use models\User;

    if (Session::exists('Register_success')) {
        echo Session::flash('Register_success');
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
    
    <?php include "header.php" ?>


</body>
</html>