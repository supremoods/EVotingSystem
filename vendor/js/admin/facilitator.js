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
    $(".load-UFR").load("/loadUFR");
    $(".load-facilitator-req").load("/loadFacilitatorListRequest");
}


function loadFacilitatorProfile(id){
  let facilitatorProfile = document.querySelector('.facilitator-profile-wrapper');
  facilitatorProfile.classList.toggle('modal');

  $('.facilitator-profile-card').load('/loadFacilitatorProfile/',{
    id: id
  });
}

function loadFacilitatorProfileNP(){
  let facilitatorProfile = document.querySelector('.facilitator-profile-wrapper');
  facilitatorProfile.classList.toggle('modal');
}

//
window.onload = function(){
  //hide the preloader
  preloader()
  
}
$(document).ready(function(){
  $(".load-facilitators").load("/loadFacilitatorList");
});


$(document).ready(function(){
  $(".load-UF").load("/loadUF");
});


var isOnDiv = false;


$(".load-facilitators").mouseenter(
  function(){
    isOnDiv = true;
    console.log(isOnDiv);
  }
);

$(".load-facilitators").mouseleave(
  function(){
    isOnDiv = false;
    console.log(isOnDiv);
  }
);


setInterval(function(){
  if(!isOnDiv){
    $(".load-facilitators").load("/loadFacilitatorList");
  }
}, 500);

function preloader(){
  let facilitatorWrapper = document.querySelector('.load-facilitators');
  let loading = document.querySelector('.loading');

  facilitatorWrapper.classList.toggle('hide');
  loading.classList.toggle('hide');
}