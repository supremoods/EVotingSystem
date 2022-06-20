<?php
    $page = $_REQUEST['page'];

    class AdminController{

        function routepage($page){
            if($page == "dashboard"){
                echo "dashboard";
            }else if($page == "elections" ){
                echo "elections";
            }else if($page == "user_information"){
                echo "user information";
            }elseif($page == "facilitator"){
                echo "facilitator";
            }elseif($page == "account_setting"){
                echo "account setting";
            }
        } 
    }
    

    $adminController = new AdminController();
    $adminController->routepage($page);

?>