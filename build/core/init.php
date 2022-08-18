<?php

    use classes\{Database, Cookie, Session, Config};
    use models\User;

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

        "rememberme" => array(
            'cookie_name' => 'hash',
            'cookie_expiry' => 60
        ),

        "session" => array(
            'session_name' => 'user',
            "token_name" => "token",
            "tokens" => array(
                "register" => "register",
                "login" => "login",
                "logout" => "logout"
            )
        )
    );


    $user = new User();
    
    if(Cookie::exists(Config::get("rememberme/cookie_name")) && !Session::exists(Config::get("session/session_name"))) {

        $hash = Cookie::get(Config::get("rememberme/cookie_name"));
        $res = Database::getInstance()->query("SELECT * FROM users_session WHERE hash=?", array($hash));

        if($res->count()) {

            $user->fetchUser("id", $res->results()[0]->user_id);
            $user->login($user->getPropertyValue("username"), $user->getPropertyValue("password"), true);
        }

    }


?>