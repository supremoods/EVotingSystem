<?php
    if($page == "dashboard"){
        include_once("views/evs/admin/dashboard.php");
    }else if($page == "elections" ){
        include_once("views/evs/admin/elections.php");
    }else if($page == "user_information"){
        include_once("views/evs/admin/user_information.php");
    }elseif($page == "facilitator"){
        include_once("views/evs/admin/facilitator.php");
    }elseif($page == "account_setting"){
        include_once("views/evs/admin/accountSettings.php");
    }
?>