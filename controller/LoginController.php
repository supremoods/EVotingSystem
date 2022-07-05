<?php
// Path: controller\LoginController.php
    require_once ('model/SqlQuery.php');
    // Class Login Controller
    class LoginController extends SqlQuery {
            
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
                if($this->verifyUserAccount()){
                    // set session variables
                    $_SESSION['userAccount'] = $this->getUserID();
                    $this->updateLogInStudent($_SESSION['userAccount']);
                    return true;
                }
            }
            return false;
        }

    }

    $userId = $_POST['userID'];
    $passw = $_POST['passWord'];

    // object of the class LoginController empty constructor
    $loginController = new LoginController();

    $loginController->setUserID($userId);
    $loginController->setPassw($passw);

    if($loginController->login()){
        echo json_encode(array(
            "status" => "success"
        ));
    }else{
        echo json_encode(array(
            "status" => "failed"
        ));
    }
   

?>