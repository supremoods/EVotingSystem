<!-- dashboard layout for total users and elections-->
<?php 
    require_once ('model/SqlQuery.php');

    $sqlQuery = new SqlQuery();
    
    $result = $sqlQuery->universityList();
?>
<div class="dashboard_wrappper">
    <div class="dashboard_header">
        <div class="dashboard_header_title">
            <h1>Dashboard</h1>
        </div>
    </div>

    <div class="dashboard_body">
        <div class="dashboard_filter">
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
        <div class="dashboard_users">
            <div class="left_item">
                <div class="items total_users">
                    <div class="icon total_users_icon">
                        <span class="material-icons">groups</span>
                    </div>
                    <div class="total_users_content items_content">
                        <p>Total Users</p>
                        <p><?=$sqlQuery->totalUser()?></p>
                    </div>
                </div>
                <div class="items total_facilitator">
                    <div class="icon total_facilitator_icon">
                        <span class="material-icons">supervisor_account</span>
                    </div>
                    <div class="total_facilitator_content items_content">
                        <p>Total Facilitator</p>
                        <p><?=$sqlQuery->totalUserFacilitator()?></p>
                    </div>
                </div>
                <div class="items total_students">
                    <div class="icon total_students_icon">
                        <span class="material-icons">person</span>
                    </div>
                    <div class="total_students_content items_content">
                        <p>Total Students</p>
                        <p><?=$sqlQuery->totalUserStudent()?></p>
                    </div>
                </div>
            </div>
            <div class="right_item">
                <div class="items facilitator_request">
                    <div class="icon facilitator_request_icon">
                        <span class="material-icons">contacts</span>
                    </div>
                    <div class="facilitator_request_content items_content">
                        <p>Facilitator Request</p>
                        <p><?=$sqlQuery->totalUserFacilitatorRequest()?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard_elections">
            <div class="left_item"> 
                <div class="items_wrapper">
                    <div class="items total_elections">
                        <div class="icon total_elections_icon">
                            <span class="material-icons">poll</span>
                        </div>
                        <div class="total_users_content items_content">
                            <p>Total Elections</p>
                            <p><?=$sqlQuery->totalElection()?></p>
                        </div>
                    </div>
                    <div class="items filter">
                        <div class="items_content">
                            <select class="status" name="" id="">
                                <option value="" selected>All</option>
                                <option value="">Ongoing</option>
                                <option value="">End</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="election_list_wrapper">
                    <div class="election_list">
                        <?php
                            $result = $sqlQuery->fetchElectionConfirmed();
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="election_list_item">
                            <div class="election_list_item_content">
                                <div class="university_name">
                                    <p><?=$row['university']?></p>
                                </div>
                                <div class="timeframe">
                                    <div class="date_event">
                                        <div class="date_event_icon">
                                            <span class="material-icons">date_range</span>
                                        </div>
                                        <div class="date_event_content">
                                            <p><?=$row['date']?></p>
                                            <p><?=date('h:i a', strtotime($row['start_time']))?> -  <?=date('h:i a', strtotime($row['end_time']))?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }else{
                        ?>

                        <div class="election_list_item">
                            <h3>No Results</h3>
                        </div>

                        <?php
                            }
                        ?>
                    </div>
                    <div class="btn_view_more_wrapper">
                        <div class="btn_view_more">  
                            <a href="">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_item">
                <div class="election_request_wrapper">
                    <div class="items election_request">
                        <div class="icon election_request_icon">
                            <span class="material-icons">ballot</span>
                        </div>
                        <div class="election_request_content items_content">
                            <p>Election Request</p>
                            <p><?=$sqlQuery->totalElectionRequest()?></p>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="forum_wrapper">
                    <div class="header_title">
                        <h1>Forum</h1>
                    </div>
                    <div class="items forum_engagement">
                        <div class="icon forum_icon">
                            <span class="material-icons">forum</span>
                        </div>
                        <div class="forum_content items_content">
                            <p>Total Post</p>
                            <p>22</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    
</div>