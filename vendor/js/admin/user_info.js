var isOnDiv = false;
const optionSelectPrivillage = document.querySelector(".select-privillage"),
  selectBtnPrivillage = optionSelectPrivillage.querySelector(".select-btn-privillage"),
  optionPrivillage = optionSelectPrivillage.querySelectorAll(".option-privillage"),
  sBtnTextPrivillage = optionSelectPrivillage.querySelector(".sBtn-text-privillage");

selectBtnPrivillage.addEventListener("click", () =>
  optionSelectPrivillage.classList.toggle("active")
);

optionPrivillage.forEach((option) => {
  option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text").innerText;
    sBtnTextPrivillage.innerText = selectedOption;
    optionSelectPrivillage.classList.remove("active");
  });
});

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
window.onload = function(){
  //hide the preloader
  preloader()
  
}

setInterval(function(){
  if(!isOnDiv){
    $(".load-user-info").load("/loadUserList");
  }
}, 500);

$(".load-user-info").mouseenter(
  function(){
    isOnDiv = true;
  }
);

$(".load-user-info").mouseleave(
  function(){
    isOnDiv = false;
  }
);


function preloader(){
  try{
    let userWrapper = document.querySelector('.load-user-info');
    let loading = document.querySelector('.loading');
  
    userWrapper.classList.toggle('hide');
    loading.classList.toggle('hide');
  }catch(err){
  
  }
}
