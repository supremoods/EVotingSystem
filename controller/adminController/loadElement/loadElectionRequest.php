<?php
    require_once ('model/FacilitatorSqlQuery.php');
    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $university = $_POST['university'];

    if($university == "All"){
        $result = $facilitatorSqlQuery->loadElectionRequest();
    }else{
        $result = $facilitatorSqlQuery->loadElectionRequestByUniversity($university);
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
        <div class="btn-confirm">
            <button class="btn-confirm-btn" data-id="<?=$row['id']?>" onclick="confirmElection(this.dataset.id)">
                confirm
            </button>
        </div>
        <div class="btn-cancel">
            <button class="btn-cancel-btn" data-id="<?=$row['id']?>" onclick="deleteElection(this.dataset.id)">
                delete
            </button>
        </div>
    </div>
</div>


<?php
        }
    }else{
?>
<div class="u_election_list_item">
    <h1>Election Request is Empty</h1>
</div>

<?php
    }
?>