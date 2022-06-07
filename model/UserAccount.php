<?php
    // Class User Account
    class UserAccount {
        // Properties
        public $id;
        public $image_src;
        public $userLevel;
        public $university;
        public $universityID;
        public $userID;
        public $first_name;
        public $middle_name;
        public $last_name;
        public $email;
        public $passw;
        public $status;
        public $time_stamp_in;
        public $time_stamp_out;



        // Methods
        public function getId() {
            return $this->id;
        }

        public function getImageSrc() {
            return $this->image_src;
        }

        public function getUserLevel() {
            return $this->userLevel;
        }

        public function getUniversity() {
            return $this->university;
        }

        public function getUniversityID() {
            return $this->universityID;
        }

        public function getUserID() {
            return $this->userID;
        }

        public function getFirstName() {
            return $this->first_name;
        }

        public function getMiddleName() {
            return $this->middle_name;
        }

        public function getLastName() {
            return $this->last_name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassw() {
            return $this->passw;
        }

        public function getStatus() {
            return $this->status;
        }

        public function getTimeStampIn() {
            return $this->time_stamp_in;
        }

        public function getTimeStampOut() {
            return $this->time_stamp_out;
        }

        // Methods to set properties

        public function setId($id) {
            $this->id = $id;
        }

        public function setImageSrc($image_src) {
            $this->image_src = $image_src;
        }

        public function setUserLevel($userLevel) {
            $this->userLevel = $userLevel;
        }
        
        public function setUniversity($university) {
            $this->university = $university;
        }

        public function setUniversityID($universityID) {
            $this->universityID = $universityID;
        }

        public function setUserID($userID) {
            $this->userID = $userID;
        }

        public function setFirstName($first_name) {
            $this->first_name = $first_name;
        }

        public function setMiddleName($middle_name) {
            $this->middle_name = $middle_name;
        }

        public function setLastName($last_name) {
            $this->last_name = $last_name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassw($passw) {
            $this->passw = $passw;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function setTimeStampIn($time_stamp_in) {
            $this->time_stamp_in = $time_stamp_in;
        }

        public function setTimeStampOut($time_stamp_out) {
            $this->time_stamp_out = $time_stamp_out;
        }

    

    }




?>

