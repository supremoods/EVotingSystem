<!-- dashboard layout for total users and elections-->

<div class="u_elections_wrapper">
 
    <div class="u_elections_header">
        <div class="u_elections_header_title">
            <h1>Elections</h1>
        </div>
    </div>
    <div class="chart-items">
        <div class="vote-chart-item">
            <h1>President</h1>
            <div class="vote-charts">
                <canvas id="president-chart" ></canvas>
            </div>
        </div>
        <div class="vote-chart-item">
            <h1>Vice President</h1>
            <div class="vote-charts">
                <canvas id="vice-president-chart"></canvas>
            </div>
        </div>
    </div>
    <div class="chart-items">
        <div class="vote-chart-item">
            <h1>Secretary</h1>
            <div class="vote-charts">
                <canvas id="secretary-chart"></canvas>
            </div>
        </div>
        <div class="vote-chart-item">
            <h1>Treasurer</h1>
            <div class="vote-charts">
                <canvas id="treasurer-chart"></canvas>
            </div>
        </div>
        <div class="vote-chart-item">
            <h1>Public Relations Officer</h1>
            <div class="vote-charts">
                <canvas id="pro-chart"></canvas>
            </div>
        </div>
    </div>
    <div class="chart-items chart-senators">
        <div class="vote-chart-item chart-senators-item">
            <h1>Senator</h1>
            <div class="vote-charts">
                <canvas id="senators-chart"></canvas>
            </div>
        </div>
    </div>
    <div class="chart-items chart-governors">
        <div class="vote-chart-item chart-governors-item">
            <h1>Governor</h1>
            <div class="vote-charts">
                <canvas class="gov-chart"></canvas>
            </div>
        </div>
        <div class="vote-chart-item chart-governors-item">
            <h1>Vice Governor</h1>
            <div class="vote-charts">
                <canvas class="gov-chart"></canvas>
            </div>
        </div>
    </div>
    <!-- <div class="chart-items">
        <div class="vote-charts">
            <canvas id="president-chart" ></canvas>
        </div>
        <div class="vote-charts">
            <canvas id="vice-president-chart"></canvas>
        </div>
        <div class="vote-charts">
            <canvas id="secretary-chart"></canvas>
        </div>
        <div class="vote-charts">
            <canvas id="pro-chart"></canvas>
        </div>
    </div> -->

    <div class="request-elections-modal-btn">
        <button class="btn btn-request-election" onclick="loadRequestModal()">
            <span class="material-symbols-outlined">add</span>Add Elections
        </button>
    </div>

            <!-- candidate list -->
    <div class="candidate-list-content">
        
    </div>


</div>

<div class="register-candidates-wrapper">
    <div class="register-candidates-container">
        <form method="post" id="election-reg" >
            <div class="Fields-election-wrapper">
                <div class="Fields-election">
                    <div class="Fieldset">
                        <label class="placeholder-elec">Enter Description of the Election</label>
                        <textarea type="text" name="description-election" class="reg-input" required="" autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
            <div class="Fields-election-wrapper">
                <div class="Fields-election">
                    <div class="Fieldset">
                        <label class="placeholder-elec">Input Date of Election</label>
                        <input type="date" name="election-date" class="reg-input" required="" autocomplete="off">
                    </div>
                </div>
                <div class="Fields-election">
                    <div class="Fieldset">
                        <label class="placeholder-elec">Start Time</label>
                        <input type="time" name="start-time" class="reg-input" required="">
                    </div>
                    <div class="Fieldset">
                        <label class="placeholder-elec">End Time</label>
                        <input type="time" name="end-time" class="reg-input" required="">
                    </div>
                </div>
            </div>
            <div class="fields-btn-election">
                <div class="btn-election">
                    <button class="btn-back-btn" type="button" onclick="loadRequestModal()">Back</button>
                </div>
                <div class="btn-election">
                    <button type="submit" name="insert-btn" class="btn-next-btn">Next</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once("views/evs/facilitator/modal/createElectionModal.php"); ?>
<?php require_once("views/evs/facilitator/modal/candidateProfile.php"); ?>