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
            <div class="date-picker">
                <div class="filter-label">
                    <label for="">Date</label>
                </div>
                <input type="date" name="date" id="date">
            </div>
            <div class="select-menu-status">
                <div class="filter-label">
                    <label for="">Status</label>
                </div>
                <div class="select-btn-status">
                    <span class="sBtn-text-status">All</span>
                    <span class="down-status material-icons">keyboard_arrow_down</span>
                </div>
                <ul class="options-status">
                    <li class="optionStatus">
                        <span class="option-text-status">Ongoing</span>
                    </li>
                    <li class="optionStatus">
                        <span class="option-text-status">Ended</span>
                    </li>
                </ul>
            </div>
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
                        <span class="option-text">Technological University of the Philippines</span>
                    </li>
                    <li class="option">
                        <span class="option-text">University of the Philippines</span>
                    </li>
                    <li class="option">
                        <span class="option-text">Ateneo De Manila</span>
                    </li>
                    <li class="option">
                        <span class="option-text">Pamantasan ng Lungsod ng Maynila</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="filter-icon" id="filter-icon">
            <span class="material-icons">filter_list</span>
        </div>
    </div>
    <div class="u_election_body">
        <div class="u_election_list_content">
            <div class="u_election_list_item">
                <div class="u_election_list_item_title u_items">
                    <h2>Technological Universty of the Philippines</h2>
                </div>
                <div class="u_election_list_item_content u_items">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas magnam porro dolorum reprehenderit beatae debitis ullam accusamus similique inventore commodi impedit at doloremque dolor, praesentium, perferendis, tenetur qui? Porro.</p>
                </div>
                <div class="u_election_list_item_date u_items">
                    <div class="timeframe">
                        <div class="date_event">
                            <div class="date_event_icon">
                                <span class="material-icons">date_range</span>
                            </div>
                            <div class="date_event_content">
                                <p>Date : 07/10/22</p>
                                <p>8:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u_election_list_item_status u_items">
                    <p>Ongoing</p>
                </div>
            </div>
            <div class="u_election_list_item">
                <div class="u_election_list_item_title u_items">
                    <h2>Technological Universty of the Philippines</h2>
                </div>
                <div class="u_election_list_item_content u_items">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas magnam porro dolorum reprehenderit beatae debitis ullam accusamus similique inventore commodi impedit at doloremque dolor, praesentium, perferendis, tenetur qui? Porro.</p>
                </div>
                <div class="u_election_list_item_date u_items">
                    <div class="timeframe">
                        <div class="date_event">
                            <div class="date_event_icon">
                                <span class="material-icons">date_range</span>
                            </div>
                            <div class="date_event_content">
                                <p>Date : 07/10/22</p>
                                <p>8:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u_election_list_item_status u_items">
                    <p>Ongoing</p>
                </div>
            </div>
            <div class="u_election_list_item">
                <div class="u_election_list_item_title u_items">
                    <h2>Technological Universty of the Philippines</h2>
                </div>
                <div class="u_election_list_item_content u_items">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas magnam porro dolorum reprehenderit beatae debitis ullam accusamus similique inventore commodi impedit at doloremque dolor, praesentium, perferendis, tenetur qui? Porro.</p>
                </div>
                <div class="u_election_list_item_date u_items">
                    <div class="timeframe">
                        <div class="date_event">
                            <div class="date_event_icon">
                                <span class="material-icons">date_range</span>
                            </div>
                            <div class="date_event_content">
                                <p>Date : 07/10/22</p>
                                <p>8:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u_election_list_item_status u_items">
                    <p>Ongoing</p>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("views/evs/admin/modal/requestElectionModal.php"); ?>
</div>