<?php 

    // The reason we're making a token class is, we generate a token using md5 and then we put it in the session using the set method.

    namespace classes;

    class Token {

        public static function generate($type) {
            return Session::set(Config::get("session/tokens/$type"), md5(uniqid()));
        }

        public static function check($token, $type) {
            $tokenName = Config::get("session/tokens/$type");

            if(Session::exists($tokenName) && $token === Session::get($tokenName)) {
                Session::delete($tokenName);
                return true;
            }

            return false;
        }
        
    }

?>