<?php
    
    // Class Admin
    class Admin {
        // Properties
        public $id;
        public $userId;
        public $username;
        public $password;
        


        // Constructor
        public function __construct($id, $userId, $username, $password) {
            $this->id = $id;
            $this->userId = $userId;
            $this->username = $username;
            $this->password = $password;
            
        }
        
        // Methods
        
        // Getters

        public function getId() {
            return $this->id;
        }

        public function getUserId() {
            return $this->userId;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        // Setters

        public function setId($id) {
            $this->id = $id;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function setPassword($password) {
            $this->password = $password;
        }
        
        // To string

        public function __toString() {
            return "Admin: " . $this->id . " " . $this->userId . " " . $this->username . " " . $this->password;
        }
    }





?>