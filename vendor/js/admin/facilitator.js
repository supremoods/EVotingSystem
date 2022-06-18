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

const optionSelectPrivillageModal = document.querySelector(".select-privillage-modal"),
  selectBtnPrivillageModal = optionSelectPrivillageModal.querySelector(".select-btn-privillage-modal"),
  optionPrivillageModal = optionSelectPrivillageModal.querySelectorAll(".option-privillage-modal"),
  sBtnTextPrivillageModal = optionSelectPrivillageModal.querySelector(".sBtn-text-privillage-modal");

selectBtnPrivillageModal.addEventListener("click", () =>
    optionSelectPrivillageModal.classList.toggle("active")
);

optionPrivillageModal.forEach((option) => {
  option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text").innerText;
    sBtnTextPrivillageModal.innerText = selectedOption;
    optionSelectPrivillageModal.classList.remove("active");
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
    requestModal.classList.toggle('modal');
    contentModal.classList.toggle('modal');
}



