<?php

    // Path: controller\addAdmin.php
    require_once("model/AdminSqlQuery.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $encryptPass = password_hash($password, PASSWORD_DEFAULT);
    $AdminSqlQuery = new AdminSQLQuery();
   
    if($AdminSqlQuery->insertUserAdmin($username, $encryptPass)){
        echo json_encode(array("status" => "success"));
    }else{
        echo json_encode(array("status" => "error"));
    }

    
?>