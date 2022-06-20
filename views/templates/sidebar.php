
<div class="sidebar">
    <div class="sidebar_item">
        <div class="profile_icon">
            <img src="../vendor/img/profile_pic/<?= $adminSqlQuery->getImageSrc()?>" alt="" />
        </div>
        <div class="sidebar_item_content" id="load-username">
            <p><?= $adminSqlQuery->getUserName()?></p>
        </div>
    </div>
    <div class="sidebar_item" data-page="dashboard" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon" >
            <span class="material-icons">dashboard</span>
        </div>
        <div class="sidebar_item_content">
            <p>Dashboard</p>
        </div>
    </div>
    <div class="sidebar_item" data-page="elections" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">how_to_vote</span>
        </div>
        <div class="sidebar_item_content">
            <p>Elections</p>
        </div>
    </div>
    <div class="sidebar_item" data-page="user_information" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">view_list</span>
        </div>
        <div class="sidebar_item_content">
            <p>User Information</p>
        </div>
    </div>
    <div class="sidebar_item s_last" data-page="facilitator" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">groups_2</span>
        </div>
        <div class="sidebar_item_content">
            <p>Facilitator</p>
        </div>
    </div>
    <div class="sidebar_item s_last" data-page="account_setting" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">forum</span>
        </div>
        <div class="sidebar_item_content">
            <p>Account Setting</p>
        </div>
    </div>

    <footer class="footer_wrapper">
        <ul class="nav_footer">
            <li class="link_footer"><a href="">About</a></li>
            <li class="link_footer"><a href="">Developers</a></li>
            <li class="link_footer"><a href="">Terms of Services</a></li>
            <li class="link_footer"><a href="">Privacy Policy</a></li>
        </ul>
    </footer>
</div>