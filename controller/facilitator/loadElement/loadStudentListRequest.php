<?php
    require_once ('model/FacilitatorSqlQuery.php');

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $result = $facilitatorSqlQuery->fetchAllStudentRequest();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

?>

<div class="Student-list-content-items-container request-modal">
    <div class="Student-list-content-item-row">
        <p><?=$row['university_id']?></p>
    </div>
    <div class="Student-list-content-item-row">
        <p><?=$row['first_name']." ".$row['last_name']?></p>
    </div>
    <div class="Student-list-content-item-row">
        <p><?=$row['course']?></p>
    </div>
    <div class="Student-list-content-item-row">
        <p><?=$row['collegeDept']?></p>
    </div>
    <div class="Student-list-content-item-row action-col">
        <button class="action-btn action-delete" data-id="<?=$row['id']?>" onclick="">
            <span class="material-icons">delete</span>
        </button>
        <button class="action-btn action-view" data-id="<?=$row['id']?>" onclick="loadStudentProfile(this.dataset.id)">
            <span>view</span>
        </button>
    </div>
</div>


<?php
        }
    }
?>