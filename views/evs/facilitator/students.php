<!-- studunt lits layout-->

<div class="account-setting-wrapper">
    <div class="account-setting-container">
        <div class="account-setting-header">
            <p>Student Lists</p>
        </div>
    </div>
    
    <div class="student_request" onclick="student_request_modal()">
    <div class="student_request_button" onclick="student_request_modal()">
        <span class="material-symbols-outlined">notifications</span>Student Request
    </div>
    </div>

    <div class="student_body">
        <!-- filter section -->
        <div class="student-list-header">
            <div class="search-student">
                <div class="search-student-input">
                    <input type="text" placeholder="Search Student">
                </div>
                <div class="search-student-icon">
                    <span class="material-icons">search</span>
                </div>
            </div>
            <div class="student-filter">
                <div class="select-menu select-year">
                    <div class="filter-label">
                        <label for="">Year</label>
                    </div>
                    <div class="select-btn select-btn-year">
                        <span class="sBtn-text sBtn-text-year">All</span>
                        <span class="down material-icons">keyboard_arrow_down</span>
                    </div>
                    <ul class="options">
                        <li class="option option-year">
                            <span class="option-text">2022</span>
                        </li>
                        <li class="option option-year">
                            <span class="option-text">2021</span>
                        </li>
                        <li class="option option-year">
                            <span class="option-text">2020</span>
                        </li>
                        <li class="option option-year">
                            <span class="option-text">2019</span>
                        </li>
                    </ul>
                </div>
                <div class="select-menu select-course">
                    <div class="filter-label">
                        <label for="">Course</label>
                    </div>
                    <div class="select-menu select-menu-course">
                        <div class="select-btn select-btn-course">
                            <span class="sBtn-text sBtn-text-course">All</span>
                            <span class="down material-icons">keyboard_arrow_down</span>
                        </div>
                        <ul class="options">
                            <li class="option option-course">
                                <span class="option-text">Technological University of the Philippines</span>
                            </li>
                            <li class="option option-course">
                                <span class="option-text">University of the Philippines</span>
                            </li>
                            <li class="option option-course">
                                <span class="option-text">Ateneo De Manila</span>
                            </li>
                            <li class="option option-course">
                                <span class="option-text">Pamantasan ng Lungsod ng Maynila</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of filter section -->

        <!-- student list -->
        <div class="student-list-content">
            <div class="student-list-content-items">
                <div class="student-list-content-items-wrapper header">
                    <div class="student-list-content-item-header">
                        <p>Student ID</p>
                    </div>
                    <div class="student-list-content-item-header">
                        <p>Name</p>
                    </div>
                    <div class="student-list-content-item-header">
                            <p>Course</p>
                    </div>
                    <div class="student-list-content-item-header">
                        <p>College</p>
                    </div>
                    <div class="student-list-content-item-header">
                        <p>Status</p>
                    </div>
                    <div class="student-list-content-item-header">
                        <p>Action</p>
                    </div>
                </div>
                
                <div class="student-list-content-items-wrapper load-facilitators hide">
                    
                </div>
            </div>
        </div>
    </div>

    <?php require_once("views/evs/facilitator/modal/studentRequestModal.php");?>
  
</div>

 