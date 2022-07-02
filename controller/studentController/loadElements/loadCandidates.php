<?php
    require_once ('model/ElectionSqlQuery.php');
    
    $electionSqlQuery = new ElectionSqlQuery();
    
    $evs_id = $_SESSION['userAccount'];

    $getFaciId = $electionSqlQuery->getFacilitatorId($evs_id);

    $partylist = $electionSqlQuery->selectPartylist($getFaciId);

    $result = $electionSqlQuery->fetchPartyCandidates($partylist[0]);

?>
<div class="voting-partylist-items">
    <div class="header-partylist">
        <h1><?=$partylist[0]?></h1>
    </div>
    <?php
    $governors = true;
    $senators = true;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    ?>
    <div class="candidate-card partylist_1" data-id="<?=$row['id']?>" 
    <?php if($row['position']=='President'){
        echo 'id="officers"';
    }else if($row['position']=='Senator'){
        if($senators){
            echo 'id="senators"';
        }
        $senators = false;
    }else if(strpos($row['position'], 'Governor') !== false){
        if($governors){
            echo 'id="governors"';
        }
        $governors = false;
    }?>>
        <div class="header-position">
            <h1><?=$row['position']?></h1>
        </div>
        <div class="img-candidate">
            <img src="../vendor/img/candidates/<?=$row['image']?>" class="candidateContainer" alt="">
        </div>
        <div class="candidate-name-conntainer">
            <p class="candidate-name"><?=$row['name']?></p>
        </div>
    </div> 
    <?php
        }
    }
    ?>
</div>
<?php
   $result = $electionSqlQuery->fetchPartyCandidates($partylist[1]);
?>
<div class="voting-partylist-items">
    <div class="header-partylist">
        <h1><?=$partylist[1]?></h1>
    </div>
    <?php
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    ?>
    <div class="candidate-card partylist_2" data-id="<?=$row['id']?>">
        <div class="header-position">
            <h1><?=$row['position']?></h1>
        </div>
        <div class="img-candidate">
            <img src="../vendor/img/candidates/<?=$row['image']?>" class="candidateContainer" alt="">
        </div>
        <div class="candidate-name-conntainer">
            <p class="candidate-name"><?=$row['name']?></p>
        </div>
    </div> 
    <?php
        }
    }
    ?>
</div>