
function profileContent(){
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

function cpmModal(){
    let cpmModal = document.querySelector('.cpm_wrapper');
    cpmModal.classList.toggle('modal');
}

function studentRegister(){
  let studentRegister = document.querySelector('.student');
  studentRegister.classList.toggle('modal');

  cpmModal();
}

function teacherRegister(){
  let teacherRegister = document.querySelector('.teacher');
  teacherRegister.classList.toggle('modal');

  cpmModal();
}

