<!-- close button -->
<div class="close-btn" onClick="loadRequestModal()">
    <span class="material-icons">close</span>
</div>
<div class="Student-list-modal">
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
                <div class="select-menu select-menu-colleges-modal">
                    <div class="select-btn select-btn-colleges-modal">
                        <span class="sBtn-text sBtn-text-colleges-modal">All</span>
                        <span class="down material-icons">keyboard_arrow_down</span>
                    </div>
                    <ul class="options load-USR">

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end of filter section -->

    <!-- Student list -->
    <div class="Student-list-content ">
        <div class="Student-list-content-items">
            <div class="Student-list-content-items-wrapper header request-modal">
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
                    <p>Action</p>
                </div>
            </div>
            <div class="Student-list-content-items-wrapper Student-list-content-modal load-Student-req">

            </div>
        </div>
    </div>
</div>