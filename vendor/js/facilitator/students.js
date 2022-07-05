
var isOnDiv = false;
const optionMenu = document.querySelector(".select-menu-colleges"),
    selectBtn = optionMenu.querySelector(".select-btn-colleges"),
    options = optionMenu.querySelectorAll(".option-univ"),
    sBtn_text = optionMenu.querySelector(".sBtn-text-colleges");

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


const optionMenuModal = document.querySelector(".select-menu-colleges-modal"),
    selectBtnModal = optionMenuModal.querySelector(".select-btn-colleges-modal"),
    optionsModal = optionMenuModal.querySelectorAll(".option-univ-modal"),
    sBtnTextModal = optionMenuModal.querySelector(".sBtn-text-colleges-modal");

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
    let requestModal = document.querySelector('.Student-list-modal');
    let contentModal = document.querySelector('.content');
    let closeBtn  = document.querySelector('.close-btn');
    closeBtn.classList.toggle('active');
    requestModal.classList.toggle('modal');
    contentModal.classList.toggle('modal');
    $(".load-Student-req").empty();
    $(".load-Student-req").append(preloaderProfile());
    $(".load-US").load("/loadUS");
    $(".load-USR").load("/loadUSR");
    $(".load-Student-req").load("/loadStudentListRequest");
}


function loadStudentProfile(id){
  isOnDiv = false;
  let facilitatorProfile = document.querySelector('.Student-profile-wrapper');
  facilitatorProfile.classList.toggle('modal');
  $('.Student-profile-card').empty();
  $('.Student-profile-card').append(preloaderProfile());
  $('.Student-profile-card').load('/loadStudentProfile',{
    id: id
  });
}

function loadFacilitatorProfileNP(){
  isOnDiv = false;
  let facilitatorProfile = document.querySelector('.Student-profile-wrapper');
  facilitatorProfile.classList.toggle('modal');
}

//
window.onload = function(){
  //hide the preloader
  preloader()
  
}

$(document).ready(function(){
  $(".load-Students").load("/loadStudentList");
});


// $(document).ready(function(){
//   $(".load-US").load("/loadUS");
// });


$(".load-Students").mouseenter(
  function(){
    isOnDiv = true;
  }
);

$(".load-Students").mouseleave(
  function(){
    isOnDiv = false;
  }
);


setInterval(function(){
  if(!isOnDiv){
    $(".load-Students").load("/loadStudentList");
  }
}, 500);

function preloader(){
  try{
    let facilitatorWrapper = document.querySelector('.load-Students');
    let loading = document.querySelector('.loading');
  
    facilitatorWrapper.classList.toggle('hide');
    loading.classList.toggle('hide');
  }catch(err){
  
  }
}


function preloaderProfile(){
  var preloader = '<div class="preloader"><img src="../vendor/img/loader/loading.gif" alt="" srcset=""></div>';

  return preloader;
}


function zoomID(){
  $(".Student-id-img").toggleClass("zoom");
}

function sendEmail(studentID,email){

  var values = {
    'StudentID': studentID,
    'Email': email
  };

  $.ajax({
    url: "/facilitatorMailer",
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
  $(".Student-profile-wrapper").removeClass("modal");
  $(".load-USR").load("/loadUSR");
  $(".load-Student-req").load("/loadStudentListRequest");
}

