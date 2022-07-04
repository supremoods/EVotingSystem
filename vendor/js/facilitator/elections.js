function loadRequestModal() {
 
    let requestModal = document.querySelector('.register-candidates-wrapper');
    let blur = document.querySelector('.u_elections_wrapper');
    requestModal.classList.toggle('modal');
    blur.classList.toggle('active');
    for(let i=0; i<document.querySelectorAll(".reg-input").length; i++){
        document.querySelectorAll(".reg-input")[i].value = "";
    }

    // window.location.href = "/facilitator/elections/2sadf";
}

var electionStatus;
var SenatorFilled = false;

window.addEventListener('load',function(){
    $.ajax({
        type: "GET",
        url: "/checkIfElectionExist",
        dataType: "json",
        success: function(data){
            if(data.exist === 'confirmed'){
                $(document).ready(function(){
                    $(".chart-wrapper").load("/loadCharts");
                });
                setInterval(() => {
                    $(document).ready(function(){
                        $.ajax({
                            type: "POST",
                            url: "/GetVoteCountsController",
                            dataType: "JSON",
                            success: function(data){
                                if(data){
                                    partylist_1 = data.partylist_1;
                                    partylist_2 = data.partylist_2;
                                    let count = 0;
                                    if(chartIsEmpty){
                                        for(let i=0; i<document.querySelectorAll(".vote-candidates-chart").length; i++){
                                            if(JSON.stringify(partylist_1[i].position) ==="\"Senator\"" && !SenatorFilled){
                                                for (let j = 0; j < partylist_1.length; j++){
                                                    if(JSON.stringify(partylist_1[j].position) ==="\"Senator\""){
                                                        getVoteCount(j);
                                                        count++;
                                                    }
                                                }
                                                SenatorFilled = true;
                                                console.log('####');
                                                console.log(i + " " + count);
                                            }else{
            
                                                console.log('----');
                                                if(SenatorFilled){
                                                    getVoteCount((i+count)-1);
                                                }else{
                                                    getVoteCount(i);
                                                }
                                                console.log(i);
                                            }
                                
                                            var chartDataCandidates = {
                                                labels: candidateNames,
                                                datasets: [
                                                    {
                                                    label: "Vote Counts",
                                                    data: candidateVoteCounts,
                                                    backgroundColor: [
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 99, 132, 1)',
                                                    ],
                                                    borderRadius: 15
                                                    }
                            
                                                ]
                                            };
                            
                                            var voteCandidatesChart = document.querySelectorAll('.vote-candidates-chart')[i].getContext('2d');
                                            
                                            voteChart = new Chart(voteCandidatesChart, {
                                                type: 'bar',
                                                data: chartDataCandidates,
                                                options: {
                                                    plugins: {
                                                        legend: {
                                                            display: false
                                                        },
                                                    },
                                                    maintainAspectRatio: false,
                                                    indexAxis: 'y',
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });
                                            candidateNames = [];
                                            candidateVoteCounts = [];
                                        }
                                    }         
                                    chartIsEmpty = false;
                                }
                            }
                        });
                    });
                }, 1000);

                $(".btn-add-election").addClass("hide");
                $(".btn-drop-election").removeClass("hide");
                
                $(document).ready(function(){
                    $(".candidate-list-content").load("/loadCandidates");
                });
            }else if(data.exist === 'pending'){
                $('.status-chart').text('You\'re election request is pending');
                $(".btn-add-election").removeClass("hide");
                $(".btn-drop-election").addClass("hide");
            }else{
                $('.status-chart').text('Please Create Election First!!');
                $(".btn-add-election").removeClass("hide");
                $(".btn-drop-election").addClass("hide");
            }
        }
    });
});


$('#senators').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


$('#slide-governor').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})


var count = 1;
function addCandidate(){
    count++;
    var candidateCard = `
    <div class="candidate-items-governors item">
        <div class="college-dept">
            <div class="Fields-wrapper">
                <div class="Fields">
                    <div class="Fieldset">
                        <input type="text" name="college_department_`+count+`" class="college_department" required="" autocomplete="off">
                        <label class="placeholder">Enter College Department</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="candidate-item-wrapper">
            <div class="student-candidate-item governor">
                <div class="student-candidate-card">
                    <div class="header-position">
                        <h1>Governor</h1>
                    </div>
                    <div class="img-candidate">
                        <img src="../vendor/img/candidates/uploadImage.png" class="gov-img-cont-`+count+` gov-container"  alt="">
                        <input type="file" name="gov-image-`+count+`" id="gov-image-`+count+`" class="gov-img" required="" hidden>
                    </div>
                    <div class="candidate-info-input">
                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="governor-candidate-name-cd-`+count+`" class="candidate-name" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="governor-college-cd-`+count+`" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate College</label>
                                </div>
                            </div>
                        </div>

                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="governor-course-cd-`+count+`" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate Course</label>
                                </div>
                            </div>
                        </div>

                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="governor-year-cd-`+count+`" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate Year</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-candidate-item vice-governor">
                <div class="student-candidate-card">
                    <div class="header-position">
                        <h1>Vice Governor</h1>
                    </div>
                    <div class="img-candidate">
                        <img src="../vendor/img/candidates/uploadImage.png" class="vice-gov-img-cont-`+count+` gov-container"  alt="">
                        <input type="file" name="vice-gov-image-`+count+`" id="vice-gov-image-`+count+`" class="gov-img" required="" hidden>
                    </div>
                    <div class="candidate-info-input">
                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="vice-governor-candidate-name-cd-`+count+`" class="candidate-name" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="vice-governor-college-cd-`+count+`" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate College</label>
                                </div>
                            </div>
                        </div>

                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="vice-governor-course-cd-`+count+`" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate Course</label>
                                </div>
                            </div>
                        </div>

                        <div class="Fields-wrapper">
                            <div class="Fields">
                                <div class="Fieldset">
                                    <input type="text" name="vice-governor-year-cd-`+count+`" required="" autocomplete="off">
                                    <label class="placeholder">Enter Candidate Year</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;

$('#slide-governor')
.trigger('add.owl.carousel', [candidateCard])
.trigger('refresh.owl.carousel');
   

    // $("#slide-governor").append(candidateCard);
  console.log(document.querySelectorAll(".gov-container").length);
  loadContainers();
}



function loadContainers(){
   for(let i=0; i<document.querySelectorAll(".gov-container").length; i++){
        document.querySelectorAll(".gov-container")[i].onclick = () => {
            document.querySelectorAll(".gov-img")[i].click();
        }
   }

   for(let i=0; i<document.querySelectorAll(".gov-img").length; i++){
        document.querySelectorAll(".gov-img")[i].addEventListener("change", function(){
            const file = this.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(){
                const result = reader.result;
                document.querySelectorAll(".gov-container")[i].src = result;
                }
                reader.readAsDataURL(file);
            } 
        });
    }
}


function loadCandidates(){
    for(let i=0; i<document.querySelectorAll(".candidates-container").length; i++){
         document.querySelectorAll(".candidates-container")[i].onclick = () => {
             document.querySelectorAll(".candidates-img")[i].click();
         }
    }
 
    for(let i=0; i<document.querySelectorAll(".candidates-img").length; i++){
         document.querySelectorAll(".candidates-img")[i].addEventListener("change", function(){
             const file = this.files[0];
             if(file){
                 const reader = new FileReader();
                 reader.onload = function(){
                 const result = reader.result;
                 document.querySelectorAll(".candidates-container")[i].src = result;
                 }
                 reader.readAsDataURL(file);
             } 
         });
     }
}

loadCandidates();

loadContainers();

$(document).ready(function(){
    $("#election-reg").on("submit",function(e){
        e.preventDefault();
        var form_data = new FormData(this); 
        //push form data to form_data
        form_data.append("action","add_election");
        $.ajax({
            url : "/RegisterElectionsController",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){  
            console.log("before send");
            },
            complete: function(){
                console.log("complete");
            },
            success:function(data){
                console.log(data);
                window.location.href = "/facilitator/elections?registerCandidates=1";
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            } 
        });
        
    });

});



$(document).ready(function(){
    $("#register-candidates").on("submit",function(e){
        e.preventDefault();
        var form_data = new FormData(this); 
        var gov_counts = document.querySelectorAll(".gov-container").length;
        form_data.append("action","update_candidates");
        form_data.append("gov_counts",gov_counts);
        var party_num = parseInt($(".form-number").text());
        party_num++;
        $.ajax({
            url : "/RegisterElectionsController",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){  
               console.log("before send");
            },
            complete: function(){
                console.log("complete");
            },
            success:function(data){
                console.log(data);
                if(party_num == 3){
                    window.location.href = "/facilitator/elections";
                }
                window.location.href = "/facilitator/elections?registerCandidates="+party_num;
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            } 
        });
        
    });

});



function loadcandidateProfile(id){
    isOnDiv = true;
    let candidateProfile = document.querySelector('.candidate-profile-wrapper');
    $(".pre-loading-img").addClass("active");
    candidateProfile.classList.toggle('modal');
    $('.candidate-profile-card').empty();
    $('.candidate-profile-card').append(preloaderProfile());
    $('.candidate-profile-card').load('/loadCandidatesProfile',{
     id: id,
    },function(){
        $(".pre-loading-img").removeClass("active");
    });

}
  
function loadCandidateProfileNP(){
    isOnDiv = false;
    let candidateProfile = document.querySelector('.candidate-profile-wrapper');
    candidateProfile.classList.toggle('modal');
 
}

  
function preloaderProfile(){
    var preloader = '<div class="preloader"><img src="../vendor/img/loader/loading.gif" alt="" srcset=""></div>';
    return preloader;
}
  
function editInfoSwitch(){
    var btnSave = document.querySelector(".edit-fields").disabled;
    var inputField = document.querySelector(".input-field").disabled;

    if(btnSave && inputField){
        $(".edit-fields").removeAttr("disabled");
        $(".input-field").removeAttr("disabled");
    }else{
        $(".edit-fields").attr("disabled","disabled");
        $(".input-field").attr("disabled","disabled");
    }
}

function triggerUpload(){
    let candidateImg = document.querySelector('.candidatesImg');
    candidateImg.click();
}

function UploadImage() {  
    let candidateContainer = document.querySelector('.candidateContainer');             
    let candidateImg = document.querySelector('.candidatesImg');
    candidateImg.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
          const reader = new FileReader();
          reader.onload = function(){
            const result = reader.result;
            candidateContainer.src = result;
          }
          reader.readAsDataURL(file);
        } 
    });
}   


$(document).ready(function(){
    $("#update-candidate").on("submit",function(e){
        e.preventDefault();
        console.log("updateCandidate");
        var form_data = new FormData(this); 
        $.ajax({
            url : "/updateCandidates",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){  
                $(".pre-loading-img").addClass("active");
            },
            complete: function(){
                $(".pre-loading-img").removeClass("active");
            },
            success:function(data){
                console.log(data);
                $('.edit-fields').prop('disabled', true);
                $('.input-field').prop('disabled', true);
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            } 
        });
        
    });
});


var isOnDiv = false;

  
var partylist_1;
var partylist_2;

var candidateVoteCounts = [];
var candidateNames = [];


var chartIsEmpty = true;

// sort the array in descending order
function sortVoteCountsDesc(){
    for (let i = 0; i < candidateVoteCounts.length; ++i){
        for (let j = i + 1; j < candidateVoteCounts.length; ++j){
           if (candidateVoteCounts[i] < candidateVoteCounts[j]){
              let temp = candidateVoteCounts[i];
              candidateVoteCounts[i] = candidateVoteCounts[j];
              candidateVoteCounts[j] = temp;

              temp = candidateNames[i];
              candidateNames[i] = candidateNames[j];
              candidateNames[j] = temp;
           }
        }
     }
}


function getVoteCount(index){
    candidateNames.push(JSON.stringify(partylist_1[index].name));
    candidateNames.push(JSON.stringify(partylist_2[index].name));
    candidateVoteCounts.push(parseInt(partylist_1[index].votes));
    candidateVoteCounts.push(parseInt(partylist_2[index].votes));
    sortVoteCountsDesc();
}



function loadDropElection(){
    $(".alert-drop-wrapper").toggleClass("active");
}

function dropElection(){
    alert("Election Dropped");
    $.ajax({
        type: "POST",
        url: "/dropElection",
        dataType: "JSON",
        success: function(data){
            if(data){
                $(".btn-add-election").removeClass("hide");
                $(".btn-drop-election").addClass("hide");
                $(".alert-drop-wrapper").toggleClass("active");
            }
        },
        error: function (request, status, error) {
            console.log(request.responseText);
        }  
    });
}