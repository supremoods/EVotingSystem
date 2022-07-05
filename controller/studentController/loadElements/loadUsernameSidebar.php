<?php
    // create a new instance of the adminSqlQuery class
    include_once("model/FacilitatorSqlQuery.php");

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $result = $facilitatorSqlQuery->fetchStudentInfoAccount($_SESSION['userAccount']);

?>

<div class="profile_icon">
    <img src="../vendor/img/profile_pic/<?= $facilitatorSqlQuery->getImageSrc()?>" alt="" />
</div>

<div class="sidebar_item_content" id="load-username">
    <p><?= $facilitatorSqlQuery->getFirstName()." ".$facilitatorSqlQuery->getLastName();?></p>
</div>
