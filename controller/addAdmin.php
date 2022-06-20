<?php

    // Path: controller\addAdmin.php
    require_once("model/SqlQuery.php");

    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $encryptPass = password_hash($password, PASSWORD_DEFAULT);
    $sqlQuery = new SQLQuery();
   
    if($sqlQuery->insertUserAdmin($user_id, $encryptPass)){
        echo json_encode(array("status" => "success"));
    }else{
        echo json_encode(array("status" => "error"));
    }

    
?>