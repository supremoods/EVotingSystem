<div class="facilitator-wrapper">
    <div class="facilitator-header">
        <div class="facilitator-header-title">
            <h1>Facilitator</h1>
        </div>
    </div>
    <div class="request-facilitator-modal-btn">
        <button class="btn btn-request-facilitator" onclick="loadRequestModal()">
            <span class="material-icons">notifications</span>Facilitator Request
        </button>
    </div>
    <div class="facilitator-list-body">
        <!-- filter section -->
        <div class="facilitator-list-header">
            <div class="search-facilitator">
                <div class="search-facilitator-input">
                    <input type="text" placeholder="Search facilitator">
                </div>
                <div class="search-facilitator-icon">
                    <span class="material-icons">search</span>
                </div>
            </div>
            <div class="facilitator-filter">
                <div class="select-menu select-univ">
                    <div class="filter-label">
                        <label for="">University</label>
                    </div>
                    <div class="select-menu select-menu-univ">
                        <div class="select-btn select-btn-univ">
                            <span class="sBtn-text sBtn-text-univ">All</span>
                            <span class="down material-icons">keyboard_arrow_down</span>
                        </div>
                        <ul class="options load-UF">
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of filter section -->

        <!-- facilitator list -->
        <div class="facilitator-list-content">
            <div class="facilitator-list-content-items">
                <div class="facilitator-list-content-items-wrapper header">
                    <div class="facilitator-list-content-item-header">
                        <p>Facilitator ID</p>
                    </div>
                    <div class="facilitator-list-content-item-header">
                        <p>Name</p>
                    </div>
                    <div class="facilitator-list-content-item-header">
                        <P>Privillage</P>
                    </div>
                    <div class="facilitator-list-content-item-header">
                        <p>University</p>
                    </div>
                    <div class="facilitator-list-content-item-header">
                        <p>Status</p>
                    </div>
                    <div class="facilitator-list-content-item-header">
                        <p>Action</p>
                    </div>
                </div>
                <div class="facilitator-list-content-items-wrapper load-facilitators hide">
                    <div class="loading hide">
                        <img src="../vendor/img/loader/Eclipse-1s-200px.gif" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of facilitator list -->

    <!-- modal facilitator -->
    <?php require_once("views/evs/admin/modal/facilitatorRequestModal.php"); ?>
    <?php require_once("views/evs/admin/modal/facilitatorProfile.php"); ?>
</div>