<?php 

    // The reason we're making a token class is, we generate a token using md5 and then we put it in the session using the set method.

    namespace classes;

    class Token {

        public static function generate() {
            return Session::set(Config::get("session/token_name"), md5(uniqid()));
        }

        public static function check($token) {
            $tokenName = Config::get("session/token_name");

            if (Session::exists($tokenName) && $token === Session::get($tokenName)) {
                Session::delete($tokenName);
                return true;
            }

            return false;
        }
        
    }

?>