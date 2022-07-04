<!-- dashboard layout for total users and elections-->

<div class="u_elections_wrapper">
    <div class="u_elections_header">
        <div class="u_elections_header_title">
            <h1>Elections</h1>
        </div>
    </div>
    <div class="request-elections-modal-btn">
        <button class="btn btn-request-election" onclick="loadRequestModal()">
            <span class="material-icons">notifications</span>Request Elections
        </button>
    </div>
    <div class="election_filter">
        <div class="filter-wrapper">
            
            <div class="select-menu">
                <div class="filter-label">
                    <label for="">University</label>
                </div>
                <div class="select-btn">
                    <span class="sBtn-text">All</span>
                    <span class="down material-icons">keyboard_arrow_down</span>
                </div>
                <ul class="options">
                    <li class="option">
                        <span class="option-text">All</span>
                    </li>
                    <?php
                    require_once ('model/FacilitatorSqlQuery.php');
                    $facilitatorSqlQuery = new FacilitatorSqlQuery();

                    $result = $facilitatorSqlQuery->loadElection();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                    <li class="option option-modal">
                        <span class="option-text"><?= $row['university']?></span>
                    </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="u_election_body">
        <div class="u_election_list_content election_list">

        </div>
    </div>

    <?php require_once("views/evs/admin/modal/requestElectionModal.php"); ?>
</div>