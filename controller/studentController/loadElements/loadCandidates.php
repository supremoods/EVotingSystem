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
    $officers = true;
    $governors = true;
    $senators = true;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    ?>
    <div class="candidate-card partylist_1" data-boolean="false" data-id="<?=$row['id']?>" 
    <?php if($row['position']=='President'||$row['position']=='Vice-President'||$row['position']=='Secretary'||$row['position']=='Treasurer'||$row['position']=='Public Relation Officer'){
        if($officers){
            echo 'id="officers"';
        }else{
            echo 'data-category="officers"';
        }
        $officers = false;
        }else if($row['position']=='Senator'){
        if($senators){
            echo 'id="senators" data-category="senators"';
        }else{
            echo 'data-category="senators"';
        }
        $senators = false;
    }else if(strpos($row['position'], 'Governor') !== false){
        if($governors){
            echo 'id="governors"';
        }else{
            echo 'data-category="governors"';
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
    <div class="candidate-card partylist_2" data-boolean="false" data-id="<?=$row['id']?>">
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