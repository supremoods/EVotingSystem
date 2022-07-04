<?php
    require_once("model/SqlQuery.php");

    $privillage = $_POST['privillage'];
    $university = $_POST['university'];

    $sqlquery = new SqlQuery();

    if($privillage == "All" && $university == "All"){
        $result = $sqlquery->selectAllVerifiedUsers();
    }else if($privillage == "All" && $university != "All"){
        $result = $sqlquery->selectAllVerifiedUsersByUniversity($university);
    }else if($privillage != "All" && $university == "All"){
        $result = $sqlquery->selectAllVerifiedUsersByPrivillage($privillage);
    }else if($privillage != "All" && $university != "All"){
        $result = $sqlquery->selectAllVerifiedUsersByUniversityAndPrivillage($university, $privillage);
    }
  
    if($result){
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
?>

<div class="user-list-content-items-container">
    <div class="user-list-content-item-row">
        <p><?=$row['user_id']?></p>
    </div>
    <div class="user-list-content-item-row">
        <p><?=$row['first_name']." ".$row['last_name']?></p>
    </div>
    <div class="user-list-content-item-row">
        <p><?=$row['user_level']?></p>
    </div>
    <div class="user-list-content-item-row">
        <p><?=$row['university']?></p>
    </div>
</div>

<?php
            }
        }
    }
    
?>
