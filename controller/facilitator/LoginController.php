<?php

    require_once ('model/FacilitatorSqlQuery.php');


    class FacilitatorLoginController extends FacilitatorSqlQuery{
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
                if($this->verifyFacilitator()){
                    // set session variables
                    $_SESSION['userID'] = $this->getUserID();
                    return true;
                }
            }
            
            return false;
        }
        
    }


    $username = $_POST['username'];
    $passw = $_POST['passWord'];

    // object of the class AdminLoginController empty constructor

    $facilitatorLoginController = new FacilitatorLoginController();
     

    $facilitatorLoginController->setUserID($username);
    $facilitatorLoginController->setPassw($passw);

   
    if($facilitatorLoginController->login()){
        echo json_encode(array(
            "status" => "success"
        ));
    }else{
        echo json_encode(array(
            "status" => "failed"
        ));
    }


?>