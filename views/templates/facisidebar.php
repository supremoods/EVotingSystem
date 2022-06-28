<div class="sidebar">
    <div class="sidebar_item load_avatar">
        <div class="profile_icon">
            <img src="../vendor/img/profile_pic/<?= $facilitatorSqlQuery->getImageSrc()?>" alt="" />
        </div>
        <div class="sidebar_item_content">
            <p><?= $facilitatorSqlQuery->getFirstName()." ".$facilitatorSqlQuery->getLastName()?></p>
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
    <div class="sidebar_item" data-page="students" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">view_list</span>
        </div>
        <div class="sidebar_item_content">
            <p>Students</p>
        </div>
    </div>
    <div class="sidebar_item s_last" data-page="report" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">error</span>
        </div>
        <div class="sidebar_item_content">
            <p>Report</p>
        </div>
    </div>
    <div class="sidebar_item s_last" data-page="forum" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">forum</span>
        </div>
        <div class="sidebar_item_content">
            <p>Forum</p>
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