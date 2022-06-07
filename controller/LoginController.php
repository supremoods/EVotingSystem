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
        

    }

    $userId = $_POST['userID'];
    $passw = $_POST['passWord'];

    // object of the class LoginController empty constructor
    $loginController = new LoginController('', '', '', '', '', '', '', '', '', '', '', '', '', '');

    $loginController->setUserID($userId);
    $loginController->setPassw($passw);

    // call the checkProperties method

    if ($loginController->checkProperties()) {
        // call the checkUserAccount method
        if($loginController->verifyUserAccount()){
            // start session
            // set session variables
            $_SESSION['userAccount'] = $loginController->getUserID();
            echo json_encode(array(
                "status" => "success"
            ));

        }else{

            echo json_encode(array(
                "status" => "failed"
            ));
        }
    }else{
        echo json_encode(array(
            "status" => "failed1"
        ));
    }


?>