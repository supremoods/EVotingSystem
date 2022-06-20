<?php

    require_once("model/AdminSqlQuery.php");
    $id = $_SESSION['id'];
    $username = $_POST['username'];
    $password = $_POST['new_password'];
    $encryptPass = password_hash($password, PASSWORD_DEFAULT);
    $AdminSqlQuery = new AdminSqlQuery();

    //updateUserAdmin
    
    if($AdminSqlQuery->updateUserAdmin($id, $username, $encryptPass)){
        echo json_encode(array("status" => "success"));
    }else{
        echo json_encode(array("status" => "error"));
    }

?>
