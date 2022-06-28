<?php
    require_once ('model/FacilitatorSqlQuery.php');

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $facilitatorID = $_SESSION['facilitatorID'];

    $newPassword = $_POST['password'];
    $encryptedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    if($facilitatorSqlQuery->updatePassword($encryptedPassword, $facilitatorID)){
        echo json_encode(array('success' => "successfully updated password"));
    }
    
?>