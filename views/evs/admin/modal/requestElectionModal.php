<div class="request-elections-modal">
    <div class="elections-modal-container">
        <div class="btn-modal-exit" onclick="loadRequestModal()" >
            <span class="material-icons">close</span>
        </div>
        <div class="election-modal">
            <div class="election_filter">
                <div class="filter-wrapper" id="filter-wrapper-modal">
                    <div class="select-menu select-menu-modal">
                        <div class="filter-label">
                            <label for="">University</label>
                        </div>
                        <div class="select-btn select-btn-modal">
                            <span class="sBtn-text sBtn-text-modal">All</span>
                            <span class="down material-icons">keyboard_arrow_down</span>
                        </div>
                        <ul class="options">
                            <li class="option option-modal">
                                <span class="option-text">All</span>
                            </li>

                            <?php
                            require_once ('model/FacilitatorSqlQuery.php');
                            $facilitatorSqlQuery = new FacilitatorSqlQuery();

                            $result = $facilitatorSqlQuery->loadElectionRequest();

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
                <div class="u_election_list_content election_request">

                </div>
            </div>
        </div>
    </div>
</div>