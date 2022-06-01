
function profileContent(){
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

function cpmModal(){
    let cpmModal = document.querySelector('.cpm_wrapper');
    cpmModal.classList.toggle('modal');
}

function studentRegister(){
  let studentRegister = document.querySelector('.register_wrapper');
  studentRegister.classList.toggle('modal');
  document.querySelector("#profession").textContent = "Student Registration";
  document.querySelector(".profession").value = "Student";
  cpmModal();
}

function teacherRegister(){
  let studentRegister = document.querySelector('.register_wrapper');
  studentRegister.classList.toggle('modal');
  document.querySelector(".profession").value = "Teacher";
  document.querySelector("#profession").textContent = "Teacher Registration";
  cpmModal();
}

const profileContainer = document.querySelector(".uploaded_Profile");
const uploadProfile = document.querySelector("#uploadProfileImg");

function triggerUpload(){
  uploadProfile.click();
}

function uploadImage(){

  uploadProfile.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
        const reader = new FileReader();
        reader.onload = function(){
            const result = reader.result;
            profileContainer.src = result;
        }
        reader.readAsDataURL(file);
        } 
    });
}


let suggestions = [];

var xhr = new XMLHttpRequest();
xhr.open('POST', "../../controller/populateUniversity.php");
xhr.onload = function(){
  var universityArr = this.response;
  universityArr = JSON.parse(universityArr); //convert string to object

  for(var i = 0; i < universityArr.length; i++){
     suggestions[i] = universityArr[i];
  }
  // pass universityArr to array

};

xhr.send();

console.log(suggestions);


const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("#university");
const suggBox = searchWrapper.querySelector(".autocom-box");
// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){

        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = `<li>${userValue}</li>`;
    }else{
      listData = list.join('');
    }
    suggBox.innerHTML = listData;
}


