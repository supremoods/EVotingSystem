<?php

    require_once('config/ConfigDB.php');
    require_once('UserAccount.php');

    class FacilitatorSqlQuery extends UserAccount {

        // fetch facilitator info from the database
        public function fetchFacilitatorInfo($id) {
            $database = new Database();
            $this->setId($id);

            $sql = "SELECT * FROM user_account WHERE id = '$this->id'";

            $result = $database->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        // set value to the object UserAccount properties
                        $this->setId($row['id']);
                        $this->setImageSrc($row['image_src']);
                        $this->setUserLevel($row['user_level']);
                        $this->setUniversity($row['university']);
                        $this->setUniversityIDImg($row['university_id_img']);
                        $this->setUniversityID($row['university_id']);
                        $this->setUserID($row['user_id']);
                        $this->setFirstName($row['first_name']);
                        $this->setLastName($row['last_name']);
                        $this->setEmail($row['email']);
                        $this->setPassw($row['passw']);
                        $this->setStatus($row['status']);
                        $this->setTimeStampIn($row['time_stamp_in']);
                        $this->setTimeStampOut($row['time_stamp_out']);
                    }
                }
            }
        }
        // fetch all facilitator
        public function fetchAllFacilitator() {
            $database = new Database();
            $sql = "SELECT * FROM user_account WHERE user_id IS NOT NULL AND user_level = 'Facilitator'";

            $result = $database->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return $result;
            }
        }

        public function updateUserID($evsUserID,$facilitatorID){
            $database = new Database();
            $sql = "UPDATE user_account SET user_id = '$evsUserID' WHERE id = '$facilitatorID'";

            $result = $database->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return true;
            }
        }

        // fetch all facilitator
        public function fetchAllFacilitatorRequest() {
            $database = new Database();
            $sql = "SELECT * FROM user_account WHERE user_id IS NULL AND user_level = 'Facilitator'";

            $result = $database->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return $result;
            }
        }


        // verify the facilitator account
        public function verifyFacilitator() {
            // create a new database object
            $database = new Database();

            $sql = "SELECT * FROM user_account WHERE user_id = '$this->userID'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if(password_verify($this->passw, $row['passw'])){

                            $this->setId($row['id']);
                            $_SESSION['userID'] = $this->getUserID();
                            $_SESSION['facilitatorID'] = $this->getId();
    
                            $this->updateLogIn();

                            return true;
                        }
                    }
                } 
            }

            return false;
        }
        
        // update logs of facilitator in the database
        public function updateLogIn() {
            // create a new database object
            $database = new Database();

            $sql = "UPDATE user_account SET time_stamp_in = NOW(), status = 'active' WHERE id = '$this->id'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                $this->fetchFacilitatorInfo($this->id);
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        // update logs of facilitator out the database
        public function updateLogOut($facilitatorID) {
            // create a new database object
            $database = new Database();

            $sql = "UPDATE user_account SET time_stamp_out = NOW(), status = 'inactive' WHERE id = '$facilitatorID'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                $this->fetchFacilitatorInfo($this->id);
                echo "updated";
 
                return true;
            } else {
                // if the query is not successful, return false
                // show error message
                echo "error";

                return false;
            }
        }

        // fetch all university field with no duplicate
        public function universityItemFaci() {
            // create a new database object
            $database = new Database();

            $sql = "SELECT DISTINCT university FROM user_account WHERE user_id IS NOT NULL AND user_level = 'Facilitator'";
            
            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return $result;
            }
        }

        public function universityItemFaciRequest() {
            // create a new database object
            $database = new Database();

            $sql = "SELECT DISTINCT university FROM user_account WHERE user_id IS NULL AND user_level = 'Facilitator'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return $result;
            }
        }


    }

?>