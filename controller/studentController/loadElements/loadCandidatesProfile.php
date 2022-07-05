<?php
    require_once ('model/ElectionSqlQuery.php');
    
    $electionSqlQuery = new ElectionSqlQuery();
    
    $candidateID = $_REQUEST['id'];

    $row = $electionSqlQuery->selectCandidate($candidateID);

?>
<div class="close-btn-card" onclick="loadcandidateProfileClose()">
    <span class="material-icons">close</span>
</div>
<div class="header-position">
    <h1><?=$row['position']?></h1>
</div>
<div class="img-candidate">
    <img src="../vendor/img/candidates/<?=$row['image']?>" class="candidateContainer" alt="" >
</div>
<div class="candidate-info-items">

    <div class="candidate-info-item">
        <div class="candidate-info-item-header">
            <p>Candidate Name</p>
        </div>
        <div class="candidate-info-item-content">
            <p><?=$row['name']?></p>
        </div>
    </div>
    <div class="candidate-info-item">
        <div class="candidate-info-item-header">
            <p>Candidate College</p>
        </div>
        <div class="candidate-info-item-content">
            <p><?=$row['college']?></p>
        </div>
    </div>
    <div class="candidate-info-item">
        <div class="candidate-info-item-header">
            <p>Candidate Course</p>
        </div>
        <div class="candidate-info-item-content">
            <p><?=$row['course']?></p>
        </div>
    </div>
    <div class="candidate-info-item">
        <div class="candidate-info-item-header">
            <p>Candidate Year</p>
        </div>
        <div class="candidate-info-item-content">
            <p><?=$row['year']?></p>
        </div>
    </div>
</div>
    
<div class="pre-loading-img">
    <img src="../vendor/img/loader/loading.gif" alt="">
</div>


