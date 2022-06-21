<?php
    // create a new instance of the adminSqlQuery class
    include_once("model/AdminSqlQuery.php");

    $adminSqlQuery = new AdminSqlQuery();
    $result = $adminSqlQuery->fetchAdminInfo($_SESSION['id']);

?>

<div class="profile_icon">
    <img src="../vendor/img/profile_pic/<?= $adminSqlQuery->getImageSrc()?>" alt="" />
</div>
<div class="sidebar_item_content" id="load-username">
    <p><?= $adminSqlQuery->getUserName()?></p>
</div>
