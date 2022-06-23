<?php
    require_once ('model/FacilitatorSqlQuery.php');

    $facilitatorID = $_REQUEST['id'];

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $facilitatorSqlQuery->fetchFacilitatorInfo($facilitatorID);


?>

<div class="facilitator-avatar">
    <img src="../vendor/img/profile_pic/<?=$facilitatorSqlQuery->getImageSrc()?>" alt="">
    <div class="online-status">
        
    </div>
</div>

<div class="facilitator-info-list">
    <div class="facilitator-info-list-item">
        <p><?=$facilitatorSqlQuery->getLastName().", ".$facilitatorSqlQuery->getFirstName()." ".$facilitatorSqlQuery->getMiddleName()?></p>
    </div>
    <div class="facilitator-info-list-item">
        <p><?=$facilitatorSqlQuery->getUserLevel()?></p>
    </div>
    <div class="facilitator-info-list-item">
        <p><?=$facilitatorSqlQuery->getUniversityID()?></p>
    </div>
    <?php
        if(!empty($facilitatorSqlQuery->getUserID())){
    ?>
    <div class="facilitator-info-list-item">
        <p><?=$facilitatorSqlQuery->getUserID()?></p>
    </div>
    <?php
        }
    ?>
    <div class="facilitator-info-list-item">
        <p><?=$facilitatorSqlQuery->getEmail()?></p>
    </div>
</div>