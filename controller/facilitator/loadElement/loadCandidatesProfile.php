<?php
    require_once ('model/ElectionSqlQuery.php');
    
    $electionSqlQuery = new ElectionSqlQuery();
    
    $candidateID = $_REQUEST['id'];

    $row = $electionSqlQuery->selectCandidate($candidateID);

?>

    <div class="header-position">
        <h1><?=$row['position']?></h1>
    </div>
    <input type="text" name="candidate-id" value="<?=$candidateID?>" hidden>
    <div class="img-candidate">
        <img src="../vendor/img/candidates/<?=$row['image']?>" class="candidateContainer" alt="" onclick="triggerUpload()">
        <input type="file" name="candidate-image" id="candidate-image" class="candidatesImg input-field"  onclick="UploadImage()"  hidden disabled>
    </div>
    <div class="candidate-info-input">
        <div class="Fields-wrapper">
            <div class="Fields">
                <div class="Fieldset">
                    <input type="text" name="candidate-name" disabled class="input-field" value="<?=$row['name']?>" autocomplete="off" >
                    <label class="placeholder">Candidate Name</label>
                </div>
            </div>
        </div>
        <div class="Fields-wrapper">
            <div class="Fields">
                <div class="Fieldset">
                    <input type="text" name="candidate-college" value="<?=$row['college']?>" class="input-field" disabled autocomplete="off" >
                    <label class="placeholder">Candidate College</label>
                </div>
            </div>
        </div>
        <div class="Fields-wrapper">
            <div class="Fields">
                <div class="Fieldset">
                    <input type="text" name="candidate-course" value="<?=$row['course']?>" disabled class="input-field" autocomplete="off" >
                    <label class="placeholder">Candidate Course</label>
                </div>
            </div>
        </div>
        <div class="Fields-wrapper">
            <div class="Fields">
                <div class="Fieldset">
                    <input type="text" name="candidate-year" value="<?=$row['year']?>"  disabled class="input-field" autocomplete="off" >
                    <label class="placeholder">Candidate Year</label>
                </div>
            </div>
        </div>
        <div class="fields-edit-info">
            <div class="edit-info-switch">
                <input type="checkbox" id="edit-info-switch" onclick="editInfoSwitch()"/>
                <p>Edit Information</p>
            </div>
        </div>

        <div class="Fields-wrapper">
            <div class="Fields">
                <div class="Fieldset">
                    <button type="submit" class="edit-fields" disabled>Save Changes</button>
                </div>
            </div>
        </div>
        <div class="pre-loading-img">
            <img src="../vendor/img/loader/loading.gif" alt="">
        </div>
        <div class="success-message" onclick="closeSuccess()">
            <p>Successfully Edited</p>
        </div>
    </div>

