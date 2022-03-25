<?php

    namespace models;

    use classes\{Hash, Config, Session, Database, Cookie};

    class User {

        private $db;
        private $sessionName;
        private $cookieName;

        private $id;
        private $username = '';
        private $email = '';
        private $password = '';
        private $salt = '';
        private $firstname = '';
        private $lastname = '';
        private $joindate = '';
        private $user_type = 1;
        private $isLoggedIn = false;

        public function __construct() {

            // Everytime we instantiate a user object we need to check if the session is set to determine whether to login or not
            $this->db = Database::getInstance();
            $this->sessionName = Config::get('session/session_name');
            $this->cookieName = Config::get('rememberme/cookie_name');

            if(Session::exists($this->sessionName)) {
                $dt = Session::get($this->sessionName);

                if($this->fetchUser("id", $dt)) {

                    $this->isLoggedIn = true;

                }
            }

        }

        public function getPropertyValue($propertyName) {
            return $this->$propertyName;
        }

        public function setPropertyValue($propertyName, $propertyValue) {
            $this->$propertyName = $propertyValue;
        }

        public function fetchUser($field_name, $field_value) {

            $this->db->query("SELECT * FROM users WHERE $field_name = ?", array($field_value));

            if($this->db->count() > 0) {
                $fetchedUser = $this->db->results()[0];
                $this->id = $fetchedUser->id;
                $this->username = $fetchedUser->username;
                $this->email = $fetchedUser->email;
                $this->password = $fetchedUser->password;
                $this->salt = $fetchedUser->salt;
                $this->firstname = $fetchedUser->firstname;
                $this->lastname = $fetchedUser->lastname;
                $this->joindate = $fetchedUser->joindate;
                $this->user_type = $fetchedUser->user_type;

                return true;
            }

            return false; 

        }

        public function setData($data = array()) {

            $this->id = isset($data["id"]) ? $data["id"] : null;
            $this->username = $data["username"];
            $this->email = $data["email"];
            $this->password = $data["password"];
            $this->salt = $data["salt"];
            $this->firstname = $data["firstname"];
            $this->lastname = $data["lastname"];
            $this->joindate = $data["joindate"];
            $this->user_type = $data["user_type"];

        }

        public function register() {

            $this->db->query("INSERT INTO users
            (username, email, password, salt, firstname, lastname, joindate, user_type)
            VALUES (?,?,?,?,?,?,?,?)", array (
                $this->username,
                $this->email,
                $this->password,
                $this->salt,
                $this->firstname,
                $this->lastname,
                $this->joindate,
                $this->user_type
            ));

            if(!$this->db->error()) {

                return true;

            } else {

                return false;

            }

        }

        public function update() {

            $this->db->query("UPDATE users SET username=?, email=? password=?, salt=?, firstname=?, lastname=?, joindate=?, user_type=? WHERE id=?",
            array (
                $this->username,
                $this->email,
                $this->password,
                $this->salt,
                $this->firstname,
                $this->lastname,
                $this->joindate,
                $this->user_type,
                $this->id,
            ));

            return $this->db->error() ? false : true;
        }

        public function delete() {

            $this->db->query("DELETE FROM users WHERE id=?", array($this->id));

            return ($this->db->error()) ? false : true;
        }

        public function login($username_or_username='', $password='', $rememberme=false) {

            if($this->id) {

                Session::set($this->sessionName, $this->id);
                $this->isLoggedIn = true;
                return true;

            } else {

                $fetchBy = "username";
                if(strpos($username_or_username, "@")) {
                    $fetchBy = "email";
                }

                if ($this->fetchUser($fetchBy, $username_or_username)) {
                    if ($this->password === Hash::make($password, $this->salt)) {

                        Session::set($this->sessionName, $this->id);

                        if($rememberme) {

                            $this->db->query("SELECT * FROM users_session WHERE user_id=?", array($this->id));

                            if (!$this->db->count()) {

                                $hash = Hash::unique();
                                $this->db->query('INSERT INTO users_session (user_id, hash) VALUES (?, ?)', array($this->id, $hash));

                            } else {

                                $hash = $this->db->results()[0]->hash;

                            }

                            Cookie::set($this->cookieName, $hash, Config::get("rememberme/cookie_expiry"));
                        }

                        return true;

                    }
                }
            }

            return false;
        }

        public function logout() {

            $this->db->query("DELETE FROM users_session WHERE user_id=?", array($this->id));

            Session::delete($this->sessionName);
            Cookie::delete($this->cookieName);
        }

        public function isLoggedIn() {
            return $this->isLoggedIn;
        }

        public function toString() {
            return "User with:
                id: $this->id, 
                firstname: $this->firstname, 
                lastname: $this->lastname, 
                username: $this->username, 
                email: $this->email, 
                password: $this->password, 
                salt: $this->salt, 
                joindate: $this->joindate, 
                user_type: $this->user_type";
        }
    }


?>