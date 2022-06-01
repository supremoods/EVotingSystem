<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/model/SqlQuery.php");
?>
<nav class="navbar">
    <div class="logo_section">
        <div class="logo_img">
            <img src="../../vendor/img/logo/evs_logo_blue.png" alt="" >
        </div>
        <div class="logo_title">
            <h1> E-VOTING SYSTEM </h1>
        </div>
    </div>

    <?php
        //start session
        session_start();
        //login session
        if(isset($_SESSION['userAccount'])){
            // object of SqlQuery class
            $sqlQuery = new SqlQuery('', '', '', '', '', '', '', '', '', '', '', '', '', '');
            // call the selectUserAccount method
            $sqlQuery->selectUserAccount($_SESSION['userAccount']);
    ?>
    <div class="search_bar_wrapper">
        <div class="search_bar">
            <input type="text" placeholder="Search" />
            <i class="material-icons">search</i>
        </div>
    </div>
    <div class="nav_links">
        <div class="navbar_item_wrapper">
            <div class="navbar_item">
                <div class="navbar_item_icon">
                    <span class="material-icons">how_to_vote</span>
                </div>
            </div>
            <div class="navbar_item">
                <div class="navbar_item_icon">
                    <span class="material-icons">groups_2</span>
                </div>
            </div>
            <div class="navbar_item">
                <div class="navbar_item_icon">
                    <span class="material-icons">leaderboard</span>
                </div>
            </div>
            <div class="navbar_item active">
                <div class="navbar_item_icon">
                    <span class="material-icons">forum</span>
                </div>
            </div>
        </div>
    </div>

    <div class="profile_wrapper">
        <div class="pwpc">
            <div class="profile_icon" onclick="profileContent()">
                <img src="../../vendor/img/profile_pic/<?= $sqlQuery->getImageSrc()?>" alt="" />
            </div>
            <div class="profile_content">
                <div class="profile_content_item">
                    <div class="profile_icon">
                        <img src="../../vendor/img/profile_pic/<?= $sqlQuery->getImageSrc()?>" alt="" />
                    </div>
                    <div class="profile_desc">
                        <h1 class="username"><?= $sqlQuery->getFirstName().' '.$sqlQuery->getLastName()?></h1>
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