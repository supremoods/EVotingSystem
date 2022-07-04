<?php
    require_once("model/SqlQuery.php");

    $sqlquery = new SqlQuery();
    $result = $sqlquery->universityList();
?>

<div class="user-info-wrapper">
    <div class="user-info-header">
        <div class="user-info-header-title">
            <h1>User Information</h1>
        </div>
    </div>

    <div class="user-list-body">
        <!-- filter section -->
        <div class="user-list-header">
            <div class="search-user">

            </div>
            <div class="user-filter">
                <div class="select-menu select-privillage">
                    <div class="filter-label">
                        <label for="">Privillage</label>
                    </div>
                    <div class="select-btn select-btn-privillage">
                        <span class="sBtn-text sBtn-text-privillage">All</span>
                        <span class="down material-icons">keyboard_arrow_down</span>
                    </div>
                    <ul class="options">
                        <li class="option option-privillage">
                            <span class="option-text">All</span>
                        </li>
                        <li class="option option-privillage">
                            <span class="option-text">Student</span>
                        </li>
                        <li class="option option-privillage">
                            <span class="option-text">Facilitator</span>
                        </li>
                    </ul>
                </div>
                <div class="select-menu select-univ">
                    <div class="filter-label">
                        <label for="">University</label>
                    </div>
                    <div class="select-menu select-menu-univ">
                        <div class="select-btn select-btn-univ">
                            <span class="sBtn-text sBtn-text-univ">All</span>
                            <span class="down material-icons">keyboard_arrow_down</span>
                        </div>
                        <ul class="options">
                            <li class="option option-univ">
                                <span class="option-text">All</span>
                            </li>
                            <?php
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                            ?>
                            <li class="option option-univ">
                                <span class="option-text"><?=$row['university']?></span>
                            </li>
                            <?php
                                    }
                                }
                            ?>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of filter section -->

        <!-- user list -->
        <div class="user-list-content">
            <div class="user-list-content-items">
                <div class="user-list-content-items-wrapper header">
                    <div class="user-list-content-item-header">
                        <p>User ID</p>
                    </div>
                    <div class="user-list-content-item-header">
                        <p>Name</p>
                    </div>
                    <div class="user-list-content-item-header">
                        <P>Privillage</P>
                    </div>
                    <div class="user-list-content-item-header">
                        <p>University</p>
                    </div>
                </div>
                <div class="user-list-content-items-wrapper load-user-info hide">
                    <!-- load user list -->
                    <div class="loading hide">
                        <img src="../vendor/img/loader/Eclipse-1s-200px.gif" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>