<div class="sidebar">
    <div class="sidebar_item">
        <div class="profile_icon">
            <img src="../vendor/img/profile_pic/<?= $sqlQuery->getImageSrc()?>" alt="" />
        </div>
        <div class="sidebar_item_content">
            <p><?= $sqlQuery->getFirstName().' '.$sqlQuery->getLastName()?></p>
        </div>
    </div>
    <div class="sidebar_item" data-page="voting" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">how_to_vote</span>
        </div>
        <div class="sidebar_item_content">
            <p>Voting</p>
        </div>
    </div>
    <div class="sidebar_item" data-page="candidates" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">groups_2</span>
        </div>
        <div class="sidebar_item_content">
            <p>Candidates</p>
        </div>
    </div>
    <div class="sidebar_item" data-page="leaderboard" onclick="loadContent(this.dataset.page)">
        <div class="sidebar_item_icon">
            <span class="material-icons">leaderboard</span>
        </div>
        <div class="sidebar_item_content">
            <p>Leaderboard</p>
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

    <footer class="footer_wrapper">
        <ul class="nav_footer">
            <li class="link_footer"><a href="">About</a></li>
            <li class="link_footer"><a href="">Developers</a></li>
            <li class="link_footer"><a href="">Terms of Services</a></li>
            <li class="link_footer"><a href="">Privacy Policy</a></li>
        </ul>
    </footer>
</div>