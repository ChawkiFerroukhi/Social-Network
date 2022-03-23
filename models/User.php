<?php

    namespace models;

    class User {

        private $conn;
        private $id;
        private $username;
        private $email;
        private $password;
        private $salt;
        private $firstname;
        private $lastname;
        private $joindate;
        private $user_type;

        public function __construct($db) {

            $this->conn = $db;

        }

        public function setData($username, $password, $joindate, $user_type, $id=null, $salt="", $firstname="", $lastname="") {

            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->salt = $salt;
            $this->firstname = $firstname;
            $this->lastname = $lastname; 
            $this->joindate = isset($joindate) ? $joindate : ("Y/m/d h:i:s");
            $this->user_type = $user_type;

        }

        public function register() {

            $this->conn->query("INSERT INTO users
            (username, password, salt, firstname, lastname, joindate, user_type)
            VALUES (?,?,?,?,?,?,?)", array (
                $this->username,
                $this->password,
                $this->salt,
                $this->firstname,
                $this->lastname,
                $this->joindate,
                $this->user_type
            ));

            if (!$this->conn->error()) {

                return true;

            } else {

                return false;

            }

        }

        public function update() {

            $this->conn->query("UPDATE users SET username=?, password=?, salt=?, firstname=?, lastname=?, joindate=?, user_type=? WHERE id=?",
            array (
                $this->username,
                $this->password,
                $this->salt,
                $this->firstname,
                $this->lastname,
                $this->joindate,
                $this->user_type,
                $this->id,
            ));
        }
    }


?>