<?php
    require_once ('model/FacilitatorSqlQuery.php');
    $facilitatorSqlQuery = new FacilitatorSqlQuery();
    
    $university = $_POST['university'];
    if($university == "All"){
        $result = $facilitatorSqlQuery->loadElection();
    }else{
        $result = $facilitatorSqlQuery->loadElectionByUniversity($university);
    }

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

?>
<div class="u_election_list_item">
    <div class="u_election_list_item_title u_items">
        <h2><?= $row['university']?></h2>
    </div>
    <div class="u_election_list_item_content u_items">
        <p><?=$row['desc_election']?></p>
    </div>
    <div class="u_election_list_item_date u_items">
        <div class="timeframe">
            <div class="date_event">
                <div class="date_event_icon">
                    <span class="material-icons">date_range</span>
                </div>
                <div class="date_event_content">
                    <p><?=$row['date']?></p>
                    <p><?=date('h:i a', strtotime($row['start_time']))?> - <?=date('h:i a', strtotime($row['end_time']))?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="u_election_list_item_status u_items">
        <?php
            //check if date is equal to today
            date_default_timezone_set('Asia/Manila');
            $today = date('Y-m-d');
            $time = date('H:i:s');
            $start_time =$row['start_time'];
            $end_time = $row['end_time'];
            $date = $row['date'];
            if($today == $date){
                //check if time is between start and end time
                if($time > $start_time && $time < $end_time){
                    echo '<p class="u_election_list_item_status_active">Ongoing</p>';
                   
                }else{
                    echo '<p class="u_election_list_item_status_inactive">Closed</p>';
                }
            }else{
                echo 'Upcoming';
            }
        ?>
    </div>
</div>
<?php
        }
    }else{
?>
<div class="u_election_list_item">
    <h1>Election is Empty</h1>
</div>

<?php
    }
?>