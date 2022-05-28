<?php
    // SqlQuery.php

    // require once database connection
    require_once('config/ConfigDB.php');

    // require once the class UserAccount
    require_once('UserAccount.php');

    // Extends SqlQuery class from UserAccount.php

    // Class SqlQuery

    class SqlQuery extends UserAccount {

        // constructor
        public function __construct(
            $id, 
            $userLevel, 
            $university, 
            $universityID, 
            $userID, 
            $first_name, 
            $middle_name, 
            $last_name, 
            $email, 
            $passw, 
            $status, 
            $time_stamp_in, 
            $time_stamp_out
            ) {
            parent::__construct(
                $id,
                $userLevel, 
                $university, 
                $universityID, 
                $userID, 
                $first_name, 
                $middle_name, 
                $last_name, 
                $email, 
                $passw, 
                $status, 
                $time_stamp_in, 
                $time_stamp_out
            );
        }

        // to string
        public function __toString() {
            return "SqlQuery: " . $this->id . " " . $this->userLevel . " " . $this->university . " " . $this->universityID . " " . $this->userID . " " . $this->first_name . " " . $this->middle_name . " " . $this->last_name . " " . $this->email . " " . $this->passw . " " . $this->status . " " . $this->time_stamp_in . " " . $this->time_stamp_out;
        }

    
        // Insert a new userAccount into the database
        public function insertUserAccount() {
            // create a new database object
            $database = new Database();

            $sql = "INSERT INTO user_account (
                id, 
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
                    $this->id,
                    '$this->userLevel', 
                    '$this->university', 
                    '$this->universityID', 
                    $this->userID, 
                    '$this->first_name', 
                    '$this->middle_name', 
                    '$this->last_name', 
                    '$this->email', 
                    '$this->passw', 
                    $this->status, 
                    $this->time_stamp_in, 
                    $this->time_stamp_out
                    )";
          
            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                echo "Inserted successfully!";
                return true;
            } else {
                // if the query is not successful, return false
                echo "Error: " . $sql . "<br>" . $database->dbConnection()->error;
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
        public function selectUserAccount() {

            // create a new database object
            $database = new Database();

            $sql = "SELECT * FROM user_account WHERE id = '$this->id'";
            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                echo "Selected successfully!";
                return $result;
            } else {
                // if the query is not successful, return false
                echo "Error: " . $sql . "<br>" . $database->dbConnection()->error;
                return false;
            }


        }


        // print all rows userAccounts in the database

        

        // Select all userAccounts from the database
        public function selectAllUserAccounts() {

            // create a new database object
            $database = new Database();
            $sql = "SELECT * FROM user_account";
            $result = mysqli_query($database->dbConnection(),$sql);
            if ($result) {
                // if the query is successful, return true
                echo "Selected successfully!";
                return $result;
            } else {
                // if the query is not successful, return false
                echo "Error: " . $sql . "<br>" . $database->dbConnection()->error;
                return false;
            }

        }

        // display all user_account table

        public function displayAll(){
            $result = $this->selectAllUserAccounts();
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['user_level'] . "</td>";
                    echo "<td>" . $row['university'] . "</td>";
                    echo "<td>" . $row['university_id'] . "</td>";
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['middle_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['passw'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['time_stamp_in'] . "</td>";
                    echo "<td>" . $row['time_stamp_out'] . "</td>";
                    echo "</tr>";
                    echo "</table>";
                }

            }
        }
    
    }

?>