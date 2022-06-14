const optionSelectYear = document.querySelector(".select-year"),
  selectBtnYear = optionSelectYear.querySelector(".select-btn-year"),
  optionYear = optionSelectYear.querySelectorAll(".option-year"),
  sBtnTextYear = optionSelectYear.querySelector(".sBtn-text-year");

selectBtnYear.addEventListener("click", () =>
  optionSelectYear.classList.toggle("active")
);

optionYear.forEach((option) => {
  option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text").innerText;
    sBtnTextYear.innerText = selectedOption;
    optionSelectYear.classList.remove("active");
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
