
var isOnDiv = false;
const optionMenu = document.querySelector(".select-menu-univ"),
    selectBtn = optionMenu.querySelector(".select-btn-univ"),
    options = optionMenu.querySelectorAll(".option-univ"),
    sBtn_text = optionMenu.querySelector(".sBtn-text-univ");

selectBtn.addEventListener("click", () =>
    optionMenu.classList.toggle("active")
);

options.forEach((option) => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        optionMenu.classList.remove("active");
        $(document).ready(function(){
          $(".load-facilitators").load("/loadFacilitatorList",{
            university:sBtn_text.innerText
          });
        });
        
    });
});


const optionMenuModal = document.querySelector(".select-menu-univ-modal"),
    selectBtnModal = optionMenuModal.querySelector(".select-btn-univ-modal"),
    optionsModal = optionMenuModal.querySelectorAll(".option-univ-modal"),
    sBtnTextModal = optionMenuModal.querySelector(".sBtn-text-univ-modal");

selectBtnModal.addEventListener("click", () =>
    optionMenuModal.classList.toggle("active")
);

optionsModal.forEach((option) => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtnTextModal.innerText = selectedOption;
        optionMenuModal.classList.remove("active");
    });
});


function loadRequestModal(){
    let requestModal = document.querySelector('.facilitator-list-modal');
    let contentModal = document.querySelector('.content');
    let closeBtn  = document.querySelector('.close-btn');
    closeBtn.classList.toggle('active');
    requestModal.classList.toggle('modal');
    contentModal.classList.toggle('modal');
    $(".load-facilitator-req").empty();
    $(".load-facilitator-req").append(preloaderProfile());
    $(".load-facilitator-req").load("/loadFacilitatorListRequest");
}


function loadFacilitatorProfile(id){
  isOnDiv = false;
  let facilitatorProfile = document.querySelector('.facilitator-profile-wrapper');
  facilitatorProfile.classList.toggle('modal');
  $('.facilitator-profile-card').empty();
  $('.facilitator-profile-card').append(preloaderProfile());
  $('.facilitator-profile-card').load('/loadFacilitatorProfile',{
    id: id
  });
}

function loadFacilitatorProfileNP(){
  isOnDiv = false;
  let facilitatorProfile = document.querySelector('.facilitator-profile-wrapper');
  facilitatorProfile.classList.toggle('modal');
}

//
window.onload = function(){
  //hide the preloader
  preloader()
  
}

$(document).ready(function(){
  $(".load-facilitators").load("/loadFacilitatorList",{
    university:sBtn_text.innerText
  });
});

function preloader(){
  try{
    let facilitatorWrapper = document.querySelector('.load-facilitators');
    let loading = document.querySelector('.loading');
  
    facilitatorWrapper.classList.toggle('hide');
    loading.classList.toggle('hide');
  }catch(err){
  
  }
}


function preloaderProfile(){
  var preloader = '<div class="preloader"><img src="../vendor/img/loader/Eclipse-1s-200px.gif" alt="" srcset=""></div>';

  return preloader;
}


function zoomID(){
  $(".facilitator-id-img").toggleClass("zoom");
}

function sendEmail(facilitatorID,email){
  var values = {
    'FacilitatorID': facilitatorID,
    'Email': email
  };

  $.ajax({
    url: "/adminMailer",
    type: "POST",
    data: values,
    beforeSend: function(){
      $(".pre-loading-img").addClass("active");
    },
    complete: function(){
        $(".pre-loading-img").removeClass("active");
        $(".success-message").addClass("active");
    },
    success:function(data){
    },
    error: function (request, status, error) {
        console.log(request.responseText);
    }    
  });

}

function closeSuccess(){
  $(".success-message").removeClass("active");
  $(".facilitator-profile-wrapper").removeClass("modal");
  $(".load-facilitator-req").load("/loadFacilitatorListRequest");
}