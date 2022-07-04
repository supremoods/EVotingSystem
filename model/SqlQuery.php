<?php
    // SqlQuery.php

    // require once database connection
    require_once('config/ConfigDB.php');

    // require once the class UserAccount
    require_once('UserAccount.php');

   

    // Extends SqlQuery class from UserAccount.php

    // Class SqlQuery

        class SqlQuery extends UserAccount {
    
        // Insert a new userAccount into the database
        public function insertUserAccount() {
            // create a new database object
            $database = new Database();

            $sql = "INSERT INTO user_account (
                university_id_img,
                image_src, 
                user_level, 
                university_id, 
                user_id, 
                first_name, 
                last_name, 
                email, 
                passw, 
                ) VALUES (
                    NULL,
                    '$this->image_src',
                    '$this->userLevel', 
                    '$this->university', 
                    '$this->universityID', 
                    NULL, 
                    '$this->first_name', 
                    '$this->last_name', 
                    '$this->email', 
                    '$this->passw', 

                    )";
          
            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function insertForm1($token){
            $database = new Database();

            $sql = "INSERT INTO user_account(
                user_token,
                user_level, 
                first_name,
                last_name,
                email,
                passw
            )VALUES(
                '$token',
                '$this->userLevel',
                '$this->first_name',
                '$this->last_name',
                '$this->email',
                '$this->passw'
            )";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                $_SESSION['user_token'] = $token;
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function insertStudentForm2(){
            $database = new Database();

            $sql = "INSERT INTO student_university_info(
                universityId,
                collegeDept, 
                course
            )VALUES(
                '$this->universityID',
                '$this->college_dept',
                '$this->course'
            )";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function updateform2($privillage){
            $database = new Database();
            $session = $_SESSION['user_token'];
            $sql = "UPDATE user_account SET
                university_id = '$this->universityID',
                university = '$this->university'
            WHERE
                user_token = '$session'
            ";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                if($privillage == "student"){
                    if($this->insertStudentForm2()){
                        return true;
                    }
                }
                
                return true;
                
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function updateform3(){
            $database = new Database();
            $session = $_SESSION['user_token'];
            
            $sql = "UPDATE user_account SET
                university_id_img = '$this->universityIDImg'
            WHERE
                user_token = '$session'
            ";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
        // Delete a userAccount from the database
        public function deleteUserAccount() {

            // create a new database object
            $database = new Database();

            $sql = "DELETE FROM user_account WHERE id = '$this->id'";
            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                echo "Deleted successfully!";
                return true;
            } else {
                // if the query is not successful, return false
                echo "Error: " . $sql . "<br>" . $database->dbConnection()->error;
                return false;
            }

        }

        // Select a userAccount from the database
        public function verifyUserAccount() {
            // create a new database object
            $database = new Database();

            $sql = "SELECT * FROM user_account WHERE user_id = '$this->userID'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if(password_verify($this->passw, $row['passw'])){
                            // decrypt the password
                            return true;
                        }
                    }
                } 
            } 

            return false;
        }


        public function selectAllVerifiedUsers(){
            $database = new Database();
            $sql = "SELECT * FROM user_account WHERE user_id IS NOT NULL ";

            $result = $database->dbConnection()->query($sql);

            if($result){
                return $result;
            }
        }

        public function selectAllVerifiedUsersByUniversity($university){
            $database = new Database();
            $sql = "SELECT * FROM user_account WHERE user_id IS NOT NULL AND university = '$university'";

            $result = $database->dbConnection()->query($sql);

            if($result){
                return $result;
            }
        }

        public function selectAllVerifiedUsersByPrivillage($privillage){
            $priv=strtolower($privillage);
            $database = new Database();
            $sql = "SELECT * FROM user_account WHERE user_id IS NOT NULL AND user_level = '$priv'";

            $result = $database->dbConnection()->query($sql);

            if($result){
                return $result;
            }
        }

        public function selectAllVerifiedUsersByUniversityAndPrivillage($university, $privillage){
            $database = new Database();
            $sql = "SELECT * FROM user_account WHERE user_id IS NOT NULL AND university = '$university' AND user_level = '$privillage'";

            $result = $database->dbConnection()->query($sql);

            if($result){
                return $result;
            }
        }
        
        // public function selectAllVerifiedUsers($privillage, $university){
        //     $database = new Database();
        //     $sql = "SELECT * FROM user_account WHERE user_id IS NOT NULL OR user_level = '$privillage' OR university = '$university'";

        //     $result = $database->dbConnection()->query($sql);

        //     if($result){
        //         return $result;
        //     }
        // }

        // Select a userAccount from the database
        public function fetchUserInfo($user_id) {
            // create a new database object
            $database = new Database();
            $this->setUserID($user_id);

            $sql = "SELECT * FROM user_account WHERE user_id = '$this->userID'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        // decrypt the password
                        $this->id = $row['id'];
                        $this->image_src = $row['image_src'];
                        $this->userLevel = $row['user_level'];
                        $this->university = $row['university'];
                        $this->universityID = $row['university_id'];
                        $this->userID = $row['user_id'];
                        $this->first_name = $row['first_name']; 
                        $this->last_name = $row['last_name'];
                        $this->email = $row['email'];
                        $this->passw = $row['passw'];
                        $this->status = $row['status'];
                        $this->time_stamp_in = $row['time_stamp_in'];
                        $this->time_stamp_out = $row['time_stamp_out'];
                    }
                } 
            }
        }

        
        // fetch all university field with no duplicate
        public function universityList() {
            // create a new database object
            $database = new Database();

            $sql = "SELECT DISTINCT university FROM user_account WHERE user_id IS NOT NULL";
            
            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return $result;
            }
        }



   

    }

?>