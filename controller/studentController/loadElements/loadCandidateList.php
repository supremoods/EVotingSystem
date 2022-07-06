<?php
    require_once ('model/ElectionSqlQuery.php');
    
    $electionSqlQuery = new ElectionSqlQuery();
    
    $evs_id = $_SESSION['userAccount'];

    $getFaciId = $electionSqlQuery->getFacilitatorId($evs_id);

    $partylist = $electionSqlQuery->selectPartylist($getFaciId);    

    $result = $electionSqlQuery->fetchPartyCandidates($partylist[0]);

?>
<div class="candidate-list-content-items">
    <div class="partylist-name">
        <p><?=$partylist[0]?></p>
    </div>
    <div class="candidate-list-content-items-wrapper header">
        <div class="candidate-list-content-item-header">
            <p>Position</p>
        </div>
        <div class="candidate-list-content-item-header">
            <p>Name</p>
        </div>
        <div class="candidate-list-content-item-header">
            <p>Action</p>
        </div>
    </div>
    <div class="candidate-list-content-items-wrapper load-candidates hide">
       <?php
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

       ?>
        <!-- load student here -->
        <div class="candidate-list-content-items-container">
            <div class="candidate-list-content-item-row">
                <p><?=$row['position']?></p>
            </div>
            <div class="candidate-list-content-item-row">
                <p><?=$row['name']?></p>
            </div>        
            <div class="candidate-list-content-item-row action-col">
                <button class="action-btn action-view" data-id="<?=$row['id']?>" onclick="loadcandidateProfile(this.dataset.id)">
                    <span>view</span>
                </button>
            </div>
        </div>
        <?php
            }
        }
        ?>

    </div>
</div>

<hr>

<?php
   $result = $electionSqlQuery->fetchPartyCandidates($partylist[1]);
?>


<div class="candidate-list-content-items">
    <div class="partylist-name">
        <p><?=$partylist[1]?></p>
    </div>
    <div class="candidate-list-content-items-wrapper header">
        <div class="candidate-list-content-item-header">
            <p>Position</p>
        </div>
        <div class="candidate-list-content-item-header">
            <p>Name</p>
        </div>
        <div class="candidate-list-content-item-header">
            <p>Action</p>
        </div>
    </div>
    <div class="candidate-list-content-items-wrapper load-candidates hide">
       <?php
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

       ?>
        <!-- load student here -->
        <div class="candidate-list-content-items-container">
            <div class="candidate-list-content-item-row">
                <p><?=$row['position']?></p>
            </div>
            <div class="candidate-list-content-item-row">
                <p><?=$row['name']?></p>
            </div>        
            <div class="candidate-list-content-item-row action-col">
                <button class="action-btn action-view" data-id="<?=$row['id']?>" onclick="loadcandidateProfile(this.dataset.id)">
                    <span>view</span>
                </button>
            </div>
        </div>
        <?php
            }
        }
        ?>

    </div>
</div>