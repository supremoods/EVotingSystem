<?php
    if($page == "dashboard"){
        include_once("views/evs/admin/dashboard.php");
    }else if($page == "elections" ){
        echo "elections";
    }else if($page == "user_information"){
        echo "user information";
    }elseif($page == "facilitator"){
        echo "facilitator";
    }elseif($page == "account_setting"){
        echo "account setting";
    }
?>