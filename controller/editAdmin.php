<?php

    require_once("model/SqlQuery.php");
    $id = $_SESSION['id'];
    $user_id = $_POST['user_id'];
    $password = $_POST['new_password'];
    $encryptPass = password_hash($password, PASSWORD_DEFAULT);
    $sqlQuery = new SqlQuery();

    //updateUserAdmin
    $sqlQuery->updateUserAdmin($id, $user_id, $encryptPass);





?>
