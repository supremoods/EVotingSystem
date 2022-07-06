<!-- dashboard layout for total users and elections-->
<?php 
    require_once ('model/SqlQuery.php');

    $sqlQuery = new SqlQuery();

    $evs_id = $_SESSION['userID'];

    //get the university of faciitator
    $university = $sqlQuery->fetchFacilitatorInfo($evs_id);

?>
<div class="dashboard_wrappper">
    <div class="dashboard_header">
        <div class="dashboard_header_title">
            <h1>Dashboard</h1>
        </div>
    </div>

    <div class="dashboard_body">
        <div class="dashboard_users">
            <div class="left_item">
                <div class="items total_users">
                    <div class="icon total_users_icon">
                        <span class="material-icons">groups</span>
                    </div>
                    <div class="total_users_content items_content">
                        <p>Registered Students</p>
                        <p><?=$sqlQuery->fetchFaciStudent($university)?></p>
                    </div>
                </div>
            </div>
            <div class="right_item">
                <div class="items facilitator_request">
                    <div class="icon facilitator_request_icon">
                        <span class="material-icons">contacts</span>
                    </div>
                    <div class="facilitator_request_content items_content">
                        <p>Student Request</p>
                        <p><?=$sqlQuery->fetchFaciStudentRequest($university)?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard_elections">
            <div class="left_item"> 
                <div class="election_list_wrapper">
                    <div class="election_list">
                        <?php
                            $result = $sqlQuery->fetchElectionFacilitator($evs_id);
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
                                            <p>Date : <?=$row['date']?></p>
                                            <p><?=date('h:i a', strtotime($row['start_time']))?> - <?=date('h:i a', strtotime($row['end_time']))?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="status">
                                    <h3><?=$row['status']?></h3>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="right_item">                
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