<!-- close button -->
<div class="close-btn" onClick="loadRequestModal()">
    <span class="material-icons">close</span>
</div>
<div class="facilitator-list-modal">
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

    <!-- facilitator list -->
    <div class="facilitator-list-content ">
        <div class="facilitator-list-content-items">
            <div class="facilitator-list-content-items-wrapper header request-modal">
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
                    <p>Action</p>
                </div>
            </div>
            <div class="facilitator-list-content-items-wrapper facilitator-list-content-modal load-facilitator-req">

            </div>
        </div>
    </div>
</div>