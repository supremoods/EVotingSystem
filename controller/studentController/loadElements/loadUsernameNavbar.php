<?php
    // create a new instance of the facilitatorSqlQuery class
    include_once("model/FacilitatorSqlQuery.php");

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $result = $facilitatorSqlQuery->fetchStudentInfoAccount($_SESSION['userAccount']);

?>

<div class="profile_icon" onclick="profileContent()">
    <img src="../vendor/img/profile_pic/<?= $facilitatorSqlQuery->getImageSrc()?>" alt="" />
</div>
<div class="profile_content">
    <div class="profile_content_item">
        <div class="profile_icon">
            <img src="../vendor/img/profile_pic/<?= $facilitatorSqlQuery->getImageSrc()?>" alt="" />
        </div>
        <div class="profile_desc">
            <h1 class="username"><?= $facilitatorSqlQuery->getFirstName()." ".$facilitatorSqlQuery->getLastName();?></h1>
            <p>See Your Profile</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="profile_content_item" data-page="account_settings" onclick="loadContent(this.dataset.page)">
        <span class="material-icons">settings</span>
        <p>Settings & Privacy</p>
    </div>
    <div class="profile_content_item">
        <span class="material-icons">help</span>
        <p>Help & Support</p>
    </div>
    <div class="profile_content_item logout" onclick="logout()">
        <span class="material-icons">logout</span>
        <p>Logout</p>
    </div>
</div>
