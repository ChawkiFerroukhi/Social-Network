<?php

    namespace classes;

    class Validation {

        private $_passed = false,
                $_errors = array(),
                $_db = null;


        public function __construct() {
            $this->_db = Database::getInstance();
        }


        public function check($source, $items = array()) {
            error_reporting(E_ERROR | E_PARSE);
            foreach($items as $item => $rules) {
                foreach($rules as $rule => $rule_value) {
                    $value = trim($source[$item]);
                    $item = htmlspecialchars($item);

                    if($rule === "required" && $rule_value == true && empty($value)) {
                        $this->addError("{$rules['name']} field is required.");
                        // Error : Field is required
                    } else if(!empty($value)) {
                        switch($rule) {
                            case 'min':
                                if(strlen($value) < $rule_value) {
                                    // Error : Item must be a minimum of $rule_value characters.
                                    $this->addError("{$rules['name']} must be a minimum of $rule_value characters.");
                                }
                            break;
                            case 'max':
                                if(strlen($value) > $rule_value) {
                                    // Error : Item must be a maximum of $rule_value characters.
                                    $this->addError("{$rules['name']} must be a maximum of $rule_value characters.");
                                }
                            break;
                            case 'matches':
                                if($value != $source[$rule_value]) {
                                    // Error : Password should be the same.
                                    $this->addError("Passwords should be the same.");
                                }
                            break;
                            case 'unique':
                                $this->_db->query("SELECT * FROM users WHERE $item = '$value'");
                                if($this->_db->count()) {
                                    // Error : Item already exists.
                                    $this->addError("{$rules['name']} already exists");
                                }
                            break;
                            case 'email-or-username':
                                $email_or_username = trim($value);
                                $email_or_username = filter_var($email_or_username, FILTER_SANITIZE_EMAIL);
                                if(strpos($email_or_username, '@') == true) {
                                    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email_or_username)) {
                                        $this->addError("Invalid email address.");
                                    }
                                } else {
                                    
                                }
                            break;

                        }
                    }
                }
            }

            if(empty($this->_errors)) {

                $this->_passed = true;
            }

            return $this;
        }

        // Add an error at the end of the array and if the array isn't empty the _passed value would be false.
        private function addError($error) {
            $this->_errors[] = $error;
        }

        public function errors() {
            return $this->_errors;
        }

        public function passed () {
            return $this->_passed ? true : false;
        }

    }

?>