<?php
    require_once ('model/FacilitatorSqlQuery.php');

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $evs_id = $_SESSION['userAccount'];

    $newPassword = $_POST['password'];
    $encryptedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    if($facilitatorSqlQuery->updatePasswordStudent($encryptedPassword, $evs_id)){
        echo json_encode(array('success' => "successfully updated password"));
    }
    
?>