<?php
    require_once ('model/FacilitatorSqlQuery.php');

    $studentID = $_REQUEST['id'];

    $facilitatorSqlQuery = new FacilitatorSqlQuery();

    $facilitatorSqlQuery->fetchStudentInfo($studentID);

    $email = $facilitatorSqlQuery->getEmail();
?>
<?php
    if(!empty($facilitatorSqlQuery->getUserID())){
?>
<div class="Student-avatar">
    <img src="../vendor/img/profile_pic/<?php
    if(empty($facilitatorSqlQuery->getImageSrc())){
        echo "avatar.svg";
    }else{
        echo $facilitatorSqlQuery->getImageSrc();
    }
    ?>" alt="">
 
 
    <div class="online-status <?php
    if($facilitatorSqlQuery->status != "active"){
        echo "active";
    }?>">
        
    </div>
</div>
<?php
    }else{
?>

<div class="Student-id-img">
    <img src="../vendor/img/id/<?=$facilitatorSqlQuery->getUniversityIDImg()?>"  onclick="zoomID()" alt="">
</div>

<?php } ?>

<div class="Student-info-list">
    <div class="Student-info-list-item">
        <p><?=$facilitatorSqlQuery->getLastName().", ".$facilitatorSqlQuery->getFirstName()." ".$facilitatorSqlQuery->getMiddleName()?></p>
    </div>
    <div class="Student-info-list-item">
        <p><?=$facilitatorSqlQuery->getUserLevel()?></p>
    </div>
    <div class="Student-info-list-item">
        <p><?=$facilitatorSqlQuery->getUniversityID()?></p>
    </div>
    <?php
        if(!empty($facilitatorSqlQuery->getUserID())){
    ?>
    <div class="Student-info-list-item">
        <p><?=$facilitatorSqlQuery->getUserID()?></p>
    </div>
    <?php
        }
    ?>
    <div class="Student-info-list-item">
        <p><?=$facilitatorSqlQuery->getEmail()?></p>
    </div>
    <?php
        if(empty($facilitatorSqlQuery->getUserID())){
    ?>
    <div class="Student-info-list-item approve-btn">
        <button onclick="sendEmail(<?=$studentID?>, '<?=$email?>')"><span class="material-icons-outlined">verified</span><span>Confirm</span></button>
    </div>
    <div class="pre-loading-img">
        <img src="../vendor/img/loader/loading.gif" alt="">
    </div>

    <div class="success-message" onclick="closeSuccess()">
        <p>Successfully Registered</p>
    </div>
    <?php
        }
    ?>


</div>