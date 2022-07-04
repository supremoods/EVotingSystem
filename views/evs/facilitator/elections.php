<!-- dashboard layout for total users and elections-->
<?php
    require_once ('model/FacilitatorSqlQuery.php');
    $facilitatorSqlQuery = new FacilitatorSqlQuery();
    
    $evs_id = $_SESSION['userID'];

    $result = $facilitatorSqlQuery->loadElectionbyFaciID($evs_id);


?>
<div class="u_elections_wrapper">
 
    <div class="u_elections_header">
        <div class="u_elections_header_title">
            <h1>Elections </h1>
        </div>
        <div class="u_elections_header_status">
            <h1>Status:
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            date_default_timezone_set('Asia/Manila');
                                $today = date('Y-m-d');
                                $time = date('H:i:s');
                                $start_time =$row['start_time'];
                                $end_time = $row['end_time'];
                                $date = $row['date'];
                                if($today == $date){
                                    //check if time is between start and end time
                                if($time > $start_time && $time < $end_time){
                                    echo '<p class="u_election_list_item_status_active">Ongoing</p>';
                                
                                }else{
                                    echo '<p class="u_election_list_item_status_inactive">Closed</p>';
                                }
                            }else{
                                echo 'Upcoming';
                            }
                        }
                    }else{
                        echo 'No Election';
                    }
                ?>
            </h1>
        </div>

    </div>

    <div class="chart-wrapper">
        <div class="status-chart">

        </div>
    </div>

    <div class="elections-modal-btn">
        <button class="btn btn-add-election" onclick="loadRequestModal()">
            <span class="material-symbols-outlined">add</span>Add Elections
        </button>

        <button class="btn btn-drop-election hide" onclick="loadDropElection()">
            <span class="material-symbols-outlined">delete</span>DROP Elections
        </button>
    </div>

    <div class="alert-drop-wrapper">
        <div class="alert-drop-content">
            <div class="question-text">
                <p>Are you sure you want to drop this election?</p>
            </div>
            <div class="alert-drop-btn">
                <button class="btn btn-drop-election-yes" onclick="dropElection()">
                    <span class="material-symbols-outlined">check</span>Confirm
                </button>
                <button class="btn btn-drop-election-no" onclick="loadDropElection()">
                   Cancel
                </button>
            </div>
        </div>

    </div>  

            <!-- candidate list -->
    <div class="candidate-list-content">
        
    </div>


</div>

<div class="register-candidates-wrapper">
    <div class="register-candidates-container">
        <form method="post" id="election-reg" >
            <div class="Fields-election-wrapper">
                <div class="Fields-election">
                    <div class="Fieldset">
                        <label class="placeholder-elec">Enter Description of the Election</label>
                        <textarea type="text" name="description-election" class="reg-input" required="" autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
            <div class="Fields-election-wrapper">
                <div class="Fields-election">
                    <div class="Fieldset">
                        <label class="placeholder-elec">Input Date of Election</label>
                        <input type="date" name="election-date" class="reg-input" required="" autocomplete="off">
                    </div>
                </div>
                <div class="Fields-election">
                    <div class="Fieldset">
                        <label class="placeholder-elec">Start Time</label>
                        <input type="time" name="start-time" class="reg-input" required="">
                    </div>
                    <div class="Fieldset">
                        <label class="placeholder-elec">End Time</label>
                        <input type="time" name="end-time" class="reg-input" required="">
                    </div>
                </div>
            </div>
            <div class="fields-btn-election">
                <div class="btn-election">
                    <button class="btn-back-btn" type="button" onclick="loadRequestModal()">Back</button>
                </div>
                <div class="btn-election">
                    <button type="submit" name="insert-btn" class="btn-next-btn">Next</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once("views/evs/facilitator/modal/createElectionModal.php"); ?>
<?php require_once("views/evs/facilitator/modal/candidateProfile.php"); ?>