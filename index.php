<?php

    error_reporting(E_ALL);

    require_once 'vendor/autoload.php';
    require_once 'core/init.php';

    use classes\Config;
    use classes\Database;
    use models\User;

    $db = Database::getInstance();

    $user = new User($db);

    $user->setData(18, "CHAWKI", "CHAWKI", date("Y/m/d h:i:s"), 2, "salt", "CHAWKI" ,"CHAWKIZ");

    echo $user->update();
    
    $db->query("SELECT * FROM users");

    $users = $db->results();

    foreach ($users as $user) {

        echo $user->username . "<br>";
    }

    if ($db->error()) {
        echo "Error";
    }else {
        echo "No error";
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