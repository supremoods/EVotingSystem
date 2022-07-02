


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

$(document).ready(function(){
    $(".candidate-list-content").load("/loadCandidates");
});
  
$(".candidate-list-content").mouseenter(
    function(){
      isOnDiv = true;
    }
);
  
$(".candidate-list-content").mouseleave(
    function(){
        isOnDiv = false;
    }
);


setInterval(function(){
    if(!isOnDiv){
        $(".candidate-list-content").load("/loadCandidates");
    }
}, 500);



const presidentCanvas = document.getElementById('president-chart').getContext('2d');
const presidentChart = new Chart(presidentCanvas, {
    type: 'bar',
    data: {
        labels: ['Roronoa Zoro', 'Monkey D. Luffy'],
        datasets: [{
            label: 'Presidential Votes',
            data: [120, 9512],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
            borderRadius: 15
        }]
    },
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


const vicePresidentCanvas = document.getElementById('vice-president-chart').getContext('2d');
const vicePresidentChart = new Chart(vicePresidentCanvas, {
    type: 'bar',
    data: {
        labels: ['Roronoa Zoro', 'Monkey D. Luffy'],
        datasets: [{
            label: 'Vice Presidential Votes',
            data: [120, 9512],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
            borderRadius: 15
        }]
    },
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


const secretaryCanvas = document.getElementById('secretary-chart').getContext('2d');
const secretaryChart = new Chart(secretaryCanvas, {
    type: 'bar',
    data: {
        labels: ['Roronoa Zoro', 'Monkey D. Luffy'],
        datasets: [{
            label: 'Secretary Votes',
            data: [120, 9512],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
            borderRadius: 15
        }]
    },
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


const proCanvas = document.getElementById('pro-chart').getContext('2d');
const proChart = new Chart(proCanvas, {
    type: 'bar',
    data: {
        labels: ['Roronoa Zoro', 'Monkey D. Luffy'],
        datasets: [{
            label: 'Public Relations Officer Votes',
            data: [120, 9512],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
            borderRadius: 15
        }]
    },
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

const treasurerCanvas = document.getElementById('treasurer-chart').getContext('2d');
const treasurerChart = new Chart(treasurerCanvas, {
    type: 'bar',
    data: {
        labels: ['Roronoa Zoro', 'Monkey D. Luffy'],
        datasets: [{
            label: 'Treasurer Votes',
            data: [120, 9512],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
            borderRadius: 15
        }]
    },
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


const senatorsCanvas = document.getElementById('senators-chart').getContext('2d');
var senatorsChart = new Chart(senatorsCanvas, {
    type: 'bar',
    data: {
        labels: ['Roronoa Zoro', 'Monkey D. Luffy', 'Nami', 'Usopp', 'Vinsmoke Sanji'],
        datasets: [{
            label: 'Senators Votes',
            data: [120, 9512, 2212, 425, 377],
            backgroundColor: [
                'rgba(54, 162, 235, 1)',

            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
            borderRadius: 15
        }]
    },
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

var governorsChart;




for(let i=0; i<document.querySelectorAll(".gov-chart").length; i++){
    const governorsCanvas = document.querySelectorAll(".gov-chart")[i].getContext('2d');
    var governorsChart = new Chart(governorsCanvas, {
        type: 'bar',
        data: {
            labels: ['Roronoa Zoro', 'Monkey D. Luffy', 'Nami', 'Usopp', 'Vinsmoke Sanji'],
            datasets: [{
                label: 'Senators Votes',
                data: [120, 9512, 2212, 425, 377],
                backgroundColor: [
                    'rgba(54, 162, 235, 1)',
    
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1,
                borderRadius: 15
            }]
        },
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
    
}

