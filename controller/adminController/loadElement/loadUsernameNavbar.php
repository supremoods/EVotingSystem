<?php
    // create a new instance of the adminSqlQuery class
    include_once("model/AdminSqlQuery.php");

    $adminSqlQuery = new AdminSqlQuery();
    $result = $adminSqlQuery->fetchAdminInfo($_SESSION['id']);

?>

<div class="profile_icon" onclick="profileContent()">
    <img src="../vendor/img/profile_pic/<?= $adminSqlQuery->getImageSrc()?>" alt="" />
</div>
<div class="profile_content">
    <div class="profile_content_item">
        <div class="profile_icon">
            <img src="../vendor/img/profile_pic/<?= $adminSqlQuery->getImageSrc()?>" alt="" />
        </div>
        <div class="profile_desc">
            <h1 class="username"><?= $adminSqlQuery->getUserName()?></h1>
            <p>See Your Profile</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="profile_content_item">
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
