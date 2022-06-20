<?php

    require_once ('model/AdminSqlQuery.php');


    class AdminLoginController extends AdminSqlQuery{
        // check properties if they are empty
        public function checkProperties() {
            if (
                !empty($this->getUserName()) &&
                !empty($this->getPassword())
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
                    $_SESSION['userAdmin'] = $this->getUserName();
                    return true;
                }
            }
            
            return false;
        }
        
    }


    $username = $_POST['username'];
    $passw = $_POST['passWord'];

    // object of the class AdminLoginController empty constructor

    $adminLoginController = new AdminLoginController();
     

    $adminLoginController->setUsername($username);
    $adminLoginController->setPassword($passw);

   
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