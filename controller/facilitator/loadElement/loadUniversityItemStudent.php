<?php 
    require_once ('model/FacilitatorSqlQuery.php');

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $result = $facilitatorSqlQuery->universityItemStudent();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
<li class="option option-univ">
    <span class="option-text"><?=$row['collegeDept']?></span>
</li>
<?php
        }
    }    
?>