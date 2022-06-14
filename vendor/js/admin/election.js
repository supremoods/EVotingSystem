function loadRequestModal(){
    let requestModal = document.querySelector('.request-elections-modal');
    requestModal.classList.toggle('modal');
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
  });
});


const optionMenuModalStatus = document.querySelector(".select-menu-status-modal"),
  selectBtnModalStatus = optionMenuModalStatus.querySelector(".select-btn-status-modal"),
  optionsModalStatus = optionMenuModalStatus.querySelectorAll(".option-status-modal"),
  sBtn_textModalStatus = optionMenuModalStatus.querySelector(".sBtn-text-status-modal");


selectBtnModalStatus.addEventListener("click", () =>
  optionMenuModalStatus.classList.toggle("active")
);

optionsModalStatus.forEach((option) => {
  option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text-status").innerText;
    sBtn_textModalStatus.innerText = selectedOption;
    optionMenuModalStatus.classList.remove("active");
  });
});

const filterIcon = document.querySelector(".filter-icon"),
      filterIconModal = document.querySelector("#filter-icon-modal"),
    filterWrapper = document.querySelector(".filter-wrapper"),
    filterWrapperModal = document.querySelector("#filter-wrapper-modal");

filterIcon.addEventListener("click", () => {
  filterWrapper.classList.toggle("active")
});

filterIconModal.addEventListener("click", () => {
  filterWrapperModal.classList.toggle("active")
});
