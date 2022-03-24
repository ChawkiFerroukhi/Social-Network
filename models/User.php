<?php

    namespace models;

    class User {

        private $db;
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

            $this->db = $db;

        }

        public function getPropertyValue($propertyName) {
            return $this->$propertyName;
        }

        public function setPropertyValue($propertyName, $propertyValue) {
            $this->$propertyName = $propertyValue;
        }

        public function selectById($id) {
            $this->db->query("SELECT FROM users WHERE id=?", array($id));
            $fetchedUser = $this->db->results()[0];

            $this->id = $fetchedUser->id;
            $this->username = $fetchedUser->username;
            $this->password = $fetchedUser->password;
            $this->salt = $fetchedUser->salt;
            $this->firstname = $fetchedUser->firstname;
            $this->lastname = $fetchedUser->lastname;
            $this->joindate = $fetchedUser->joindate;
            $this->user_type = $fetchedUser->user_type;

        }

        public function setData($data = array()) {

            $this->id = isset($data["id"]) ? $data["id"] : null;
            $this->username = $data["username"];
            $this->password = $data["password"];
            $this->salt = $data["salt"];
            $this->firstname = $data["firstname"];
            $this->lastname = $data["lastname"];
            $this->joindate = $data["joindate"];
            $this->user_type = $data["user_type"];

        }

        public function register() {

            $this->db->query("INSERT INTO users
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

            if (!$this->db->error()) {

                return true;

            } else {

                return false;

            }

        }

        public function update() {

            $this->db->query("UPDATE users SET username=?, password=?, salt=?, firstname=?, lastname=?, joindate=?, user_type=? WHERE id=?",
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

        public function delete() {

            $this->db->query("DELETE FROM users WHERE id=?", array($this->id));

            return ($this->db->error()) ? false : true;
        }
    }


?>