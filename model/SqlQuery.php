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
                id, 
                image_src,
                user_level, 
                university, 
                university_id, 
                user_id, 
                first_name, 
                middle_name, 
                last_name, 
                email, 
                passw, 
                status, 
                time_stamp_in, 
                time_stamp_out
                ) VALUES (
                    NULL,
                    '$this->image_src',
                    '$this->userLevel', 
                    '$this->university', 
                    '$this->universityID', 
                    NULL, 
                    '$this->first_name', 
                    '$this->middle_name', 
                    '$this->last_name', 
                    '$this->email', 
                    '$this->passw', 
                    NULL, 
                    NULL, 
                    NULL
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
                        $this->middle_name = $row['middle_name'];
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

 


   

    }

?>