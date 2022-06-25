<?php
    require_once ('model/FacilitatorSqlQuery.php');

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $result = $facilitatorSqlQuery->fetchAllFacilitatorRequest();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

?>

<div class="facilitator-list-content-items-container request-modal">
    <div class="facilitator-list-content-item-row">
        <p><?=$row['first_name']." ".$row['last_name']?></p>
    </div>
    <div class="facilitator-list-content-item-row">
        <p><?=$row['user_level']?></p>
    </div>
    <div class="facilitator-list-content-item-row">
        <p><?=$row['university']?></p>
    </div>
    <div class="facilitator-list-content-item-row action-col">
        <button class="action-btn action-delete" data-id="<?=$row['id']?>" onclick="">
            <span class="material-icons">delete</span>
        </button>
        <button class="action-btn action-view" data-id="<?=$row['id']?>" onclick="loadFacilitatorProfile(this.dataset.id)">
            <span>view</span>
        </button>
    </div>
</div>


<?php
        }
    }
?>