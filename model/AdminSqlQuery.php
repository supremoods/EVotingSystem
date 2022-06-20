<?php
    require_once('config/ConfigDB.php');
    require_once('Admin.php');

    class AdminSqlQuery extends Admin {
        // Properties
        // Select a userAdmin from the database
        public function fetchAdminInfo($id){
            $database = new Database();
            $this->setId($id);

            $sql = "SELECT * FROM admin WHERE id = '$this->id'";

            $result = $database->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        // decrypt the password
                        $this->setUserName($row['username']);
                        $this->setImageSrc($row['img']);
                        $this->setPassword($row['password']);
                        $this->setStatus($row['status']);
                        $this->setTimeStampIn($row['timeStampIn']);
                        $this->setTimeStampOut($row['timeStampOut']);
                    }
                } 
            } 
        }

        // Select a userAccount from the database
        public function verifyAdmin() {
            // create a new database object
            $database = new Database();

            $sql = "SELECT * FROM admin WHERE username = '$this->username'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if(password_verify($this->password, $row['password'])){
                            // decrypt the password
                            $this->setId($row['id']);
                            $_SESSION['id'] = $row['id'];

                            $this->updateLogIn();

                            return true;
                        }
                    }
                } 
            }

            return false;
        }

        // ---------------------------------------------------------------------------------- 
        // update logs of admin in the database

        public function updateLogIn(){
            // create a new database object
            $database = new Database();

            $sql = "UPDATE admin SET timeStampIn = NOW(), status = 'active' WHERE id = '$this->id'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                $this->fetchAdminInfo($this->id);
                return true;
            }else{
                return false;
            }
        }

        public function updateLogOut(){
            // create a new database object
            $database = new Database();

            $sql = "UPDATE admin SET timeStampOut = NOW(), status = 'inactive' WHERE id = '$this->id'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                $this->fetchAdminInfo($this->id);
                return true;
            }else{
                return false;
            }
        }

        // ---------------------------------------------------------------------------------- 

        public function deleteUserAdmin($admin_ID) {

            // create a new database object
            $database = new Database();

            $sql = "DELETE FROM admin WHERE id = '$admin_ID'";
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

        public function updateUserAdmin($admin_ID, $username, $password) {
            // create a new database object
            $database = new Database();

            $sql = "UPDATE admin SET username = '$username', password = '$password' WHERE id = '$admin_ID'";

            $result = $database->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                $this->fetchAdminInfo($admin_ID);
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
        
        
        // insert a new userAdmin into the database
        public function insertUserAdmin($username, $password) {
            // create a new database object
            $database = new Database();

            $sql = "INSERT INTO admin (
                id, 
                username,
                password, 
                img,
                status,
                timeStampIn,
                timeStampOut
                ) VALUES (
                    NULL,
                    '$username',
                    '$password',
                    'avatar.svg',
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


        // Select all userAdmin from the database
        public function fetchAllUserAdmin() {
            // create a new database object
            $database = new Database();
            
            $sql = "SELECT * FROM admin";

            $result = $database->dbConnection()->query($sql);

            return $result;
        }
    

    }

?>