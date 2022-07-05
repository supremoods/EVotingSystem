<?php
    require_once ('model/SqlQuery.php');

    class LogoutController extends SqlQuery{

        public function logout(){
            if(isset($_SESSION['userAccount'])){
                if($this->updateLogOutStudent($_SESSION['userAccount'])){
                    unset($_SESSION['userAccount']);
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
