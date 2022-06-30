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

const optionMenuStatus = document.querySelector(".select-menu-status"),
    selectBtnStatus = optionMenuStatus.querySelector(".select-btn-status"),
    optionsStatus = optionMenuStatus.querySelectorAll(".optionStatus"),
    sBtn_text_Status = optionMenuStatus.querySelector(".sBtn-text-status");

selectBtnStatus.addEventListener("click", () =>
    optionMenuStatus.classList.toggle("active")
);

optionsStatus.forEach((optionStatus) => {
    optionStatus.addEventListener("click", () => {
        let selectedOption = optionStatus.querySelector(".option-text-status").innerText;
        sBtn_text_Status.innerText = selectedOption;
        optionMenuStatus.classList.remove("active");
    });
});


const optionMenu = document.querySelector(".select-menu"),
    selectBtn = optionMenu.querySelector(".select-btn"),
    options = optionMenu.querySelectorAll(".option"),
    sBtn_text = optionMenu.querySelector(".sBtn-text");


selectBtn.addEventListener("click", () =>
    optionMenu.classList.toggle("active")
);


options.forEach((option) => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        optionMenu.classList.remove("active");
    });
});


const filterIcon = document.querySelector(".filter-icon"),
    filterWrapper = document.querySelector(".filter-wrapper");

filterIcon.addEventListener("click", () => {
    filterWrapper.classList.toggle("active")
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
