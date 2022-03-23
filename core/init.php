<?php

    //Check whether the session is started or not
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $GLOBALS["config"] = array(
        "mysql" => array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'db' => 'socialnetwork'
        ),

        'remember' => array(
            'cookie_name' => 'hash',
            'cookie_expiray' => 604800
        ),

        'session' => array(
            'session_name' => 'user'
        )

        );

?>