<?php
    require_once("model/FacilitatorSqlQuery.php");
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
        if(isset($_SESSION['facilitatorID'])){
            // object of facilitatorSqlQuery class
            $facilitatorSqlQuery = new FacilitatorSqlQuery();
            // call the fetchAdminInfo method
            $facilitatorSqlQuery->fetchFacilitatorInfo($_SESSION['facilitatorID']);
    ?>
    <div class="profile_wrapper">
        <div class="pwpc" id="pwpc">
            <div class="profile_icon" onclick="profileContent()">
                <img src="../vendor/img/profile_pic/<?= $facilitatorSqlQuery->getImageSrc()?>" alt="" />
            </div>
            <div class="profile_content">
                <div class="profile_content_item">
                    <div class="profile_icon">
                        <img src="../vendor/img/profile_pic/<?= $facilitatorSqlQuery->getImageSrc()?>" alt="" />
                    </div>
                    <div class="profile_desc">
                        <h1 class="username"><?= $facilitatorSqlQuery->getFirstName().'  '. $facilitatorSqlQuery->getLastName()?></h1>
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
                <div class="profile_content_item logout">
                    <span class="material-icons">logout</span>
                    <p>Logout</p>
                </div>
            </div>
        </div>
    </div>
     <?php } ?>

</nav>