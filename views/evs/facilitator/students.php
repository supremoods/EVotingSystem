
<div class="Student-wrapper">
    <div class="Student-header">
        <div class="Student-header-title">
            <h1>Student</h1>
        </div>
    </div>
    <div class="request-Student-modal-btn">
        <button class="btn btn-request-Student" onclick="loadRequestModal()">
            <span class="material-icons">notifications</span>Student Request
        </button>
    </div>
    <div class="Student-list-body">
        <!-- filter section -->
        <div class="Student-list-header">
            <div class="search-Student">
                <div class="search-Student-input">
                    <input type="text" placeholder="Search Student">
                </div>
                <div class="search-Student-icon">
                    <span class="material-icons">search</span>
                </div>
            </div>
            <div class="Student-filter">
                <div class="select-menu select-colleges">
                    <div class="filter-label">
                        <label for="">Colleges</label>
                    </div>
                    <div class="select-menu select-menu-colleges">
                        <div class="select-btn select-btn-colleges">
                            <span class="sBtn-text sBtn-text-colleges">All</span>
                            <span class="down material-icons">keyboard_arrow_down</span>
                        </div>
                        <ul class="options load-US">
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of filter section -->

        <!-- Student list -->
        <div class="Student-list-content">
            <div class="Student-list-content-items">
                <div class="Student-list-content-items-wrapper header">
                    <div class="Student-list-content-item-header">
                        <p>EVS ID</p>
                    </div>
                    <div class="Student-list-content-item-header">
                        <p>Student ID</p>
                    </div>
                    <div class="Student-list-content-item-header">
                        <p>Name</p>
                    </div>
                    <div class="Student-list-content-item-header">
                        <P>Course</P>
                    </div>
                    <div class="Student-list-content-item-header">
                        <p>College</p>
                    </div>
                    <div class="Student-list-content-item-header">
                        <p>Status</p>
                    </div>
                    <div class="Student-list-content-item-header">
                        <p>Action</p>
                    </div>
                </div>
                <div class="Student-list-content-items-wrapper load-Students hide">
                    
                    <!-- load student here -->

                    <div class="loading hide">
                        <img src="../vendor/img/loader/loading.gif" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Student list -->

    <!-- modal Student -->
    <?php require_once("views/evs/facilitator/modal/studentRequestModal.php"); ?>
    <?php require_once("views/evs/facilitator/modal/studentProfile.php"); ?>
</div>