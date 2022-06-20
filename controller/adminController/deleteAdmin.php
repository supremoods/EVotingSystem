<?php
    include_once("model/AdminSqlQuery.php");
    $AdminSqlQuery = new AdminSqlQuery();

    $admin_ID = $_REQUEST['id'];

    // delete admin
    if($AdminSqlQuery->deleteUserAdmin($admin_ID)){
        echo json_encode(array("status" => "success"));
    }else{
        echo json_encode(array("status" => "error"));
    }
    

?>