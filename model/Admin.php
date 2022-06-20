<?php
    
    // Class Admin
    class Admin {
        // Properties
        public $id;
        public $username;
        public $password;
        public $imageSrc;
        public $status;
        public $timeStampIn;
        public $timeStampOut;
        // Getters

        public function getId() {
            return $this->id;
        }

        public function getUserName() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getImageSrc() {
            return $this->imageSrc;
        }

        public function getStatus() {
            return $this->status;
        }

        public function getTimeStampIn() {
            return $this->timeStampIn;
        }

        public function getTimeStampOut() {
            return $this->timeStampOut;
        }

        // Setters

        public function setId($id) {
            $this->id = $id;
        }

        public function setUserName($username) {
            $this->username = $username;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function setImageSrc($imageSrc) {
            $this->imageSrc = $imageSrc;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function setTimeStampIn($timeStampIn) {
            $this->timeStampIn = $timeStampIn;
        }

        public function setTimeStampOut($timeStampOut) {
            $this->timeStampOut = $timeStampOut;
        }

    }





?>