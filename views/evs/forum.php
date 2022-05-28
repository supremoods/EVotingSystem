<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- call css header -->
    <link rel="stylesheet" href="./vendor/css/header.css" />
    <link rel="stylesheet" href="./vendor/css/forum.css" />
    <link rel="stylesheet" href="./vendor/css/modal.css" />
    <link rel="stylesheet" href="./vendor/css/root.css" />
    <link rel="shortcut icon" href="Assets/img/evs_logo_blue.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>EVS | Forum</title>
</head>

<body>
    <div id="root">
        <?php   include('views/templates/header.php'); ?>
        <div class="profile_wrapper">
                <div class="pwpc">
                    <div class="profile_icon" onclick="profileContent()">
                        <img src="./vendor/img/profile_pic/profile.jpg" alt="" />
                    </div>
                    <div class="profile_content">
                        <div class="profile_content_item">
                            <div class="profile_icon">
                                <img src="./vendor/img/profile_pic/profile.jpg" alt="" />
                            </div>
                            <div class="profile_desc">
                                <h1 class="username">John Lappay</h1>
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
                        <div class="profile_content_item">
                            <span class="material-icons">logout</span>
                            <p>Logout</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="layout_wrapper">
            <div class="sidebar">
                <div class="sidebar_item">
                    <div class="profile_icon">
                        <img src="./vendor/img/profile_pic/profile.jpg" alt="" />
                    </div>
                    <div class="sidebar_item_content">
                        <p>John Lappay</p>
                    </div>
                </div>
                <div class="sidebar_item">
                    <div class="sidebar_item_icon">
                        <span class="material-icons">how_to_vote</span>
                    </div>
                    <div class="sidebar_item_content">
                        <p>Voting</p>
                    </div>
                </div>
                <div class="sidebar_item">
                    <div class="sidebar_item_icon">
                        <span class="material-icons">groups_2</span>
                    </div>
                    <div class="sidebar_item_content">
                        <p>Candidates</p>
                    </div>
                </div>
                <div class="sidebar_item">
                    <div class="sidebar_item_icon">
                        <span class="material-icons">leaderboard</span>
                    </div>
                    <div class="sidebar_item_content">
                        <p>Leaderboard</p>
                    </div>
                </div>
                <div class="sidebar_item s_last">
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
            <div class="content_wrapper">
                <div class="forum_wrapper">
                    <div class="forum_post_wrapper">
                        <div class="status_post_wrapper">
                            <div class="status_post_input">
                                <div class="profile_icon">
                                    <img src="./vendor/img/profile_pic/profile.jpg" alt="" />
                                </div>
                                <div class="status_input">
                                    <input type="text" placeholder="What's on your mind?" />
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="status_post_btn">
                                <button class="btn">Post</button>
                            </div>
                        </div>

                        <div class="status_feed_wrapper">
                            <div class="status_feed_profile">
                                <div class="profile_icon">
                                    <img src="./vendor/img/forum_images/258572574_3036506886666431_4678886428082228301_n.jpg" alt="" />
                                </div>
                                <div class="profile_desc">
                                    <h1>Angelica Cueto</h1>
                                    <p>1 hour ago</p>
                                </div>
                            </div>
                            <div class="status_feed_content">
                                <div class="status_feed_desc">
                                    <pre>
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis asperiores saepe consectetur voluptate fugiat, doloribus numquam delectus sint provident nihil sapiente! Quis, animi consectetur nisi corporis totam dolores suscipit minima.</pre>
                                </div>
                                <div class="status_feed_img">
                                    <img src="./vendor/img/forum_images/akson-1K8pIbIrhkQ-unsplash.jpg" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="status_feed_comment">
                                <div class="status_feed_btn">
                                    <div class="up_vote_btn btn">
                                        <span class="material-icons">thumb_up_off_alt</span>
                                        <p>Up Vote</p>
                                    </div>
                                    <div class="down_vote_btn btn">
                                        <span class="material-icons">thumb_down_off_alt</span>
                                        <p>Down Vote</p>
                                    </div>
                                    <div class="comment_btn btn">
                                        <span class="material-icons">chat_bubble_outline</span>
                                        <p>Commment</p>
                                    </div>
                                    <div class="save_btn btn">
                                        <span class="material-icons">bookmark_border</span>
                                        <p>Save</p>
                                    </div>
                                </div>
                                <div class="status_feed_comment_desc"></div>
                            </div>
                            <div class="status_feed_comment_input">
                                <div class="profile_icon">
                                    <img src="./vendor/img/forum_images/258572574_3036506886666431_4678886428082228301_n.jpg" alt="" />
                                </div>
                                <div class="comment_input">
                                    <input type="text" placeholder="Write a comment....." />
                                </div>
                            </div>
                        </div>
                        <div class="status_feed_wrapper">
                            <div class="status_feed_profile">
                                <div class="profile_icon">
                                    <img src="./vendor/img/forum_images/275745787_4994738907242867_7324403474439253685_n.jpg" alt="" />
                                </div>
                                <div class="profile_desc">
                                    <h1>Renz Joal Boryas</h1>
                                    <p>1 hour ago</p>
                                </div>
                            </div>
                            <div class="status_feed_content">
                                <div class="status_feed_desc">
                                    <pre>
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis asperiores saepe consectetur voluptate fugiat, doloribus numquam delectus sint provident nihil sapiente! Quis, animi consectetur nisi corporis totam dolores suscipit minima.</pre>
                                </div>
                                <div class="status_feed_img">
                                    <img src="./vendor/img/forum_images/john-schnobrich-2FPjlAyMQTA-unsplash.jpg" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="status_feed_comment">
                                <div class="status_feed_btn">
                                    <div class="up_vote_btn btn">
                                        <span class="material-icons">thumb_up_off_alt</span>
                                        <p>Up Vote</p>
                                    </div>
                                    <div class="down_vote_btn btn">
                                        <span class="material-icons">thumb_down_off_alt</span>
                                        <p>Down Vote</p>
                                    </div>
                                    <div class="comment_btn btn">
                                        <span class="material-icons">chat_bubble_outline</span>
                                        <p>Commment</p>
                                    </div>
                                    <div class="save_btn btn">
                                        <span class="material-icons">bookmark_border</span>
                                        <p>Save</p>
                                    </div>
                                </div>
                                <div class="status_feed_comment_desc"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum_ads">
                    <div class="ads_wrapper">
                        <div class="candidates_img">
                            <div class="candidates_slides fade">
                                <img src="./vendor/img/forum_images/jeswin-thomas-_nCjz3mWEEQ-unsplash.jpg" />
                            </div>
                            <div class="candidates_slides fade">
                                <img src="./vendor/img/forum_images/natasha-kasim-BqD0Id4qemc-unsplash.jpg" />
                            </div>
                            <div class="candidates_slides fade">
                                <img src="./vendor/img/forum_images/allison-griffith-Q76DPRQ3Ix0-unsplash.jpg" />
                            </div>
                            <div class="ads_desc">
                                <h1>Lorem Ipsum</h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eligendi eveniet aspernatur laudantium rem. Mollitia autem
                                    alias laudantium officia esse fugit rem fuga ut delectus
                                    sequi. Doloremque corrupti sint vero dicta!
                                </p>
                            </div>
                            <div class="dot_wrapper">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- call app js -->
    <script src="./vendor/js/forum.js"></script>

</body>
</html>