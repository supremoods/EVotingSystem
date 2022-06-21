<?php
    require_once ('model/FacilitatorSqlQuery.php');

    class LogoutController extends FacilitatorSqlQuery{

        public function logout(){
            if(isset($_SESSION['userID'])){
                if($this->updateLogOut($_SESSION['facilitatorID'])){
                    unset($_SESSION['userID']);
                    unset($_SESSION['facilitatorID']);
                    return true;
                }
            }
        }

    }


    $logoutController = new LogoutController();
    
    if($logoutController->logout()){
        echo json_encode(array(
            "status" => "success"
        ));
    }

?>
