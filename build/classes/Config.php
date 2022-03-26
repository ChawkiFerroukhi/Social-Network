<?php



    /*
        The use case of this class:
        We defined our configuration in init.php file therefore we could directly access configuration data using : 
        $GLOBALS["config"]["mysql"]["host"] to access host but instead we de require this Config class so we can access our
        config data in a facile way using this : Config::get('mysql/host'); for example.

    */

    namespace classes;

    class Config {

        public static function get ($path = null) {

            if($path) {
                $config = $GLOBALS["config"];
                $path = explode('/', $path);

                foreach($path as $bit) {
                    if(isset($config[$bit])) {
                        $config = $config[$bit];
                    }
                }

                return $config;
                
            }

            return false;
        }
    }

?>