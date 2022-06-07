<?php

    require_once ('model/SqlQuery.php');

    class AdminLoginController extends SqlQuery{
        // check properties if they are empty
        public function checkProperties() {
            if (
                !empty($this->getUserID()) &&
                !empty($this->getPassw())
              ) {
                return true;
            }else{
                return false;
            }
        }
        
        public function login(){

            if ($this->checkProperties()) {
                // call the checkUserAccount method
                if($this->verifyAdmin()){
                    // set session variables
                    $_SESSION['userAdmin'] = $this->getUserID();
                    return true;
                }
            }
            
            return false;
        }
        
    }


    $userId = $_POST['userID'];
    $passw = $_POST['passWord'];

    // object of the class AdminLoginController empty constructor

    $adminLoginController = new AdminLoginController();

    $adminLoginController->setUserID($userId);
    $adminLoginController->setPassw($passw);

   
    if($adminLoginController->login()){
        echo json_encode(array(
            "status" => "success"
        ));
    }else{
        echo json_encode(array(
            "status" => "failed"
        ));
    }


?>