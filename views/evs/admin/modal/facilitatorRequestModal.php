<!-- close button -->
<div class="close-btn" onClick="loadRequestModal()">
    <span class="material-icons">close</span>
</div>
<div class="facilitator-list-modal">
    <!-- filter section -->
    <div class="facilitator-list-header">
        <div class="search-facilitator">
        </div>
        <div class="facilitator-filter">
            <div class="select-menu select-univ">
                <div class="filter-label">
                    <label for="">University</label>
                </div>
                <div class="select-menu select-menu-univ-modal">
                    <div class="select-btn select-btn-univ-modal">
                        <span class="sBtn-text sBtn-text-univ-modal">All</span>
                        <span class="down material-icons">keyboard_arrow_down</span>
                    </div>
                    <ul class="options load-UFR">
                        <li class="option option-univ-modal">
                            <span class="option-text">All</span>
                        </li>
                    <?php 
                        require_once ('model/FacilitatorSqlQuery.php');

                        $facilitatorSqlQuery = new FacilitatorSqlQuery();

                        $result = $facilitatorSqlQuery->universityItemFaciRequest();

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <li class="option option-univ-modal">
                            <span class="option-text"><?=$row['university']?></span>
                        </li>
                        <?php
                                }
                            }    
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end of filter section -->

    <!-- facilitator list -->
    <div class="facilitator-list-content ">
        <div class="facilitator-list-content-items">
            <div class="facilitator-list-content-items-wrapper header request-modal">
                <div class="facilitator-list-content-item-header">
                    <p>Name</p>
                </div>
                <div class="facilitator-list-content-item-header">
                    <P>Privileged</P>
                </div>
                <div class="facilitator-list-content-item-header">
                    <p>University</p>
                </div>
                <div class="facilitator-list-content-item-header">
                    <p>Action</p>
                </div>
            </div>
            <div class="facilitator-list-content-items-wrapper facilitator-list-content-modal load-facilitator-req">

            </div>
        </div>
    </div>
</div>