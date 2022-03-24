<?php

    namespace classes;

    /*

    Here we will be using singleton design pattern in order to restrict the number of instances(objects)
    that can be created from establishing the connection with the database to only one.

    */

    class Database {

        // Store the database if it's available
        private static $_instance = null;

        private $_pdo,
                $_error = false,
                $_query,
                $_results,
                $_count = 0;

        private function __construct() {

            // DB class cannot be instantiated outside the class because the constructor is private

            $this->_pdo = new \PDO("mysql:host=" . Config::get('mysql/host') . ";dbname=" . Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password')); 

        }

        public static function getInstance() {

            /*
                if we have already instantiated an instance it will return the instance.
                if we haven't done so we're going to instantiate it by creating a DATABASE object
            */

            if (!isset(self::$_instance)){

                self::$_instance = new Database();
            }

            return self::$_instance;
        }

        public function query($sql, $params = array()) {

            // error set to false so we don't return the error of any previous query

            $this->_error = false;

            if ($this->_query = $this->_pdo->prepare($sql)) {

                if (count($params)) {
                    $count = 1;
                    foreach($params as $param) {
                        $this->_query->bindValue($count, $param);
                        $count++;
                    }
                }

                if ($this->_query->execute()) {

                    $this->_results = $this->_query->fetchAll(\PDO::FETCH_OBJ);
                    $this->_count = $this->_query->rowCount();

                }else {
                    $this->_error = true;
                }

            }

            // link everything with this query function.
            return $this;
        }


        public function error() {

            return $this->_error;

        }

        public function results () {

            return $this->_results;

        }

        public function count() {

            return $this->_count;
        }

    }

?>