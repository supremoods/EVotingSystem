<?php
    require_once ('model/AdminSqlQuery.php');

    class LogoutController extends AdminSqlQuery{

        public function logout(){
            if(isset($_SESSION['userAdmin'])){
                    unset($_SESSION['userAdmin']);
                    return true;
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
