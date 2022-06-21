<?php
    require_once("model/AdminSqlQuery.php");
?>
<nav class="navbar">
    <div class="logo_section">
        <div class="logo_img">
            <img src="../vendor/img/logo/evs_logo_blue.png" alt="" >
        </div>
        <div class="logo_title">
            <h1> E-VOTING SYSTEM </h1>
        </div>
    </div>

    <?php
        //login session
        if(isset($_SESSION['id'])){
            // object of adminSqlQuery class
            $adminSqlQuery = new AdminSqlQuery();
            // call the fetchAdminInfo method
            $adminSqlQuery->fetchAdminInfo($_SESSION['id']);
    ?>
    <div class="profile_wrapper">
        <div class="pwpc" id="pwpc">
            
        </div>
    </div>
     <?php } ?>

</nav>