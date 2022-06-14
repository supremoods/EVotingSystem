<?php
    if($page == "dashboard"){
        include_once("views/evs/admin/dashboard.php");
    }else if($page == "elections" ){
        include_once("views/evs/admin/elections.php");
    }else if($page == "user_information"){
        include_once("views/evs/admin/user_information.php");
    }elseif($page == "facilitator"){
        echo "facilitator";
    }elseif($page == "account_setting"){
        echo "account setting";
    }
?>