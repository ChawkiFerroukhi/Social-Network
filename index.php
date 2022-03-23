<?php

    error_reporting(E_ALL);

    require_once 'vendor/autoload.php';
    require_once 'core/init.php';

    use classes\Config;
    use classes\Database;

    $db = Database::getInstance();
    $db->query("SELECT * FROM user_info");

    print_r($db->get());

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