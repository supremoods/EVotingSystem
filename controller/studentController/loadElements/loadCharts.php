<?php
    require_once ('model/ElectionSqlQuery.php');
    
    $electionSqlQuery = new ElectionSqlQuery();
    
    $evs_id = $_SESSION['userAccount'];

    $getFaciId = $electionSqlQuery->getFacilitatorId($evs_id);

    $result = $electionSqlQuery->fetchPosition($getFaciId);
?>
<div class="chart-items">
    <div class="vote-chart-item">
        <h1>President</h1>
        <div class="vote-charts">
            <canvas class="vote-candidates-chart"></canvas>
        </div>
    </div>
    <div class="vote-chart-item">
        <h1>Vice President</h1>
        <div class="vote-charts">
            <canvas class="vote-candidates-chart"></canvas>
        </div>
    </div>
</div>
<div class="chart-items">
    <div class="vote-chart-item">
        <h1>Secretary</h1>
        <div class="vote-charts">
            <canvas class="vote-candidates-chart"></canvas>
        </div>
    </div>
    <div class="vote-chart-item">
        <h1>Treasurer</h1>
        <div class="vote-charts">
            <canvas class="vote-candidates-chart"></canvas>
        </div>
    </div>
    <div class="vote-chart-item">
        <h1>Public Relations Officer</h1>
        <div class="vote-charts">
            <canvas class="vote-candidates-chart"></canvas>
        </div>
    </div>
</div>
<div class="chart-items chart-senators">
    <div class="vote-chart-item chart-senators-item">
        <h1>Senator</h1>
        <div class="vote-charts senator">
            <canvas class="vote-candidates-chart"></canvas>
        </div>
    </div>
</div>
<div class="chart-items chart-governors">
    <?php
     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){

            if(strpos($row['position'], 'Governor') == true){
 
    ?>
    <div class="vote-chart-item chart-governors-item">
        <h1><?=$row['position']?></h1>
        <div class="vote-charts">
            <canvas class="vote-candidates-chart"></canvas>
        </div>
    </div>
    <?php
            }
        }
    }
    ?>
</div>