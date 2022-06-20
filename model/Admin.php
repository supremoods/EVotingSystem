<?php
    
    // Class Admin
    class Admin {
        // Properties
        public $id;
        public $userId;
        public $password;
        public $imgageSrc;
        public $status;
        public $timeStampIn;
        public $timeStampOut;
        // Getters

        public function getId() {
            return $this->id;
        }

        public function getUserId() {
            return $this->userId;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getImgageSrc() {
            return $this->imgageSrc;
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

        public function setUserId($userId) {
            $this->userId = $userId;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function setImgageSrc($imgageSrc) {
            $this->imgageSrc = $imgageSrc;
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