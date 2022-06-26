<!-- close button -->
<div class="close-btn" onClick="loadRequestModal()">
    <span class="material-icons">close</span>
</div>
<div class="student-list-modal">
    <!-- filter section -->
    <div class="student-list-header">
        <div class="search-student">
            <div class="search-student-input">
                <input type="text" placeholder="Search student">
            </div>
            <div class="search-student-icon">
                <span class="material-icons">search</span>
            </div>
        </div>
        <div class="student-filter">
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

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end of filter section -->

    <!-- student list -->
    <div class="student-list-content">
        <div class="student-list-content-items">
            <div class="student-list-content-items-wrapper header request-modal">
                <div class="student-list-content-item-header">
                    <p>Name</p>
                </div>
                <div class="student-list-content-item-header">
                    <P>Privillage</P>
                </div>
                <div class="student-list-content-item-header">
                    <p>University</p>
                </div>
                <div class="student-list-content-item-header">
                    <p>Action</p>
                </div>
            </div>
            <div class="student-list-content-items-wrapper student-list-content-modal load-student-req">

            </div>
        </div>
    </div>
</div>