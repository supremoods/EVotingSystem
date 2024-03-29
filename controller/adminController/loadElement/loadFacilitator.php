<?php
    require_once ('model/FacilitatorSqlQuery.php');

    $university = $_POST['university'];
    
    $facilitatorSqlQuery = new FacilitatorSqlQuery();
    if($university == "All"){
        $result = $facilitatorSqlQuery->fetchAllFacilitator();
    }else{
        $result = $facilitatorSqlQuery->fetchFacilitatorByUniversity($university);
    }
   
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

?>

<div class="facilitator-list-content-items-container">
    <div class="facilitator-list-content-item-row">
        <p><?=$row['user_id']?></p>
    </div>
    <div class="facilitator-list-content-item-row">
        <p><?=$row['first_name']." ".$row['last_name']?></p>
    </div>
    <div class="facilitator-list-content-item-row">
        <p><?=$row['user_level']?></p>
    </div>
    <div class="facilitator-list-content-item-row">
        <p><?=$row['university']?></p>
    </div>
    <div class="facilitator-list-content-item-row">
        <p><?=$row['status']?></p>
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