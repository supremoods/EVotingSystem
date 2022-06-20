<?php
    include_once("model/SqlQuery.php");
    $sqlQuery = new SqlQuery();

    $admin_ID = $_REQUEST['id'];

    // delete admin
    if($sqlQuery->deleteUserAdmin($admin_ID)){
        echo json_encode(array("status" => "success"));
    }else{
        echo json_encode(array("status" => "error"));
    }
    

?>