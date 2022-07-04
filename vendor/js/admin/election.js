function loadRequestModal(){
    let requestModal = document.querySelector('.request-elections-modal');
    requestModal.classList.toggle('modal');
}



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


const optionMenuModal = document.querySelector(".select-menu-modal"),
  selectBtnModal = optionMenuModal.querySelector(".select-btn-modal"),
  optionsModal = optionMenuModal.querySelectorAll(".option-modal"),
  sBtn_textModal = optionMenuModal.querySelector(".sBtn-text-modal");

selectBtnModal.addEventListener("click", () =>
  optionMenuModal.classList.toggle("active")
);

optionsModal.forEach((option) => {
  option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text").innerText;
    sBtn_textModal.innerText = selectedOption;
    optionMenuModal.classList.remove("active");
    $(document).ready(function(){
      $(".u_election_list_content").load("/loadElectionRequest",{
        university:sBtn_textModal.innerText
      });
    });    
  });
});





$(document).ready(function(){
  $(".election_request").load("/loadElectionRequest",{
    university:sBtn_textModal.innerText
  });
});


$(document).ready(function(){
  $(".election_list").load("/loadElection",{
    university:sBtn_textModal.innerText
  });
});




// carousel

function confirmElection(id){
  $.ajax({
    url: "/electionConfirmation",
    type: "POST",
    data: {
      id:id,
      confirm:true
    },
    success: function(data){
      $(document).ready(function(){
        $(".election_request").load("/loadElectionRequest",{
          university:sBtn_textModal.innerText
        });
        $(".election_list").load("/loadElection",{
          university:sBtn_textModal.innerText
        });
      });
    
    }
  });
}

function deleteElection(id){
  $.ajax({
    url: "/electionConfirmation",
    type: "POST",
    data: {
      id:id,
      delete:true
    },
    success: function(data){
      $(document).ready(function(){
        $(".election_request").load("/loadElectionRequest",{
          university:sBtn_textModal.innerText
        });
        $(".election_list").load("/loadElection",{
          university:sBtn_textModal.innerText
        });
      });
    }
  });
}