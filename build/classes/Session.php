<?php

    namespace classes;

    class Session {

        public static function exists($name) {
            return (isset($_SESSION[$name])) ? true : false;
        }

        public static function delete($name) {
            if(self::exists($name)) {
                unset($_SESSION[$name]);
            }
        }

        public static function get($name) {
            if(self::exists($name)) {
                return $_SESSION[$name];
            }

            return null;

        }

        public static function set($name, $value) {
            return $_SESSION[$name] = $value;
        }

        public static function flash($name, $message = '') {
            if(self::exists($name)) {
                $sessionData = Session::get($name);
                Session::delete($name);
                
                return $sessionData;
            } else {
                Session::set($name, $message);
            }
        }

    }

?>