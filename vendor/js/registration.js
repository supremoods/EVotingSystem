function validateField() {
    var firstName = document.getElementById("first-name").value;
    var lastName = document.getElementById("last-name").value;
    var university = document.getElementById("university").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm").value;

    var firstNameClass = document.querySelector(".first-name");
    var lastNameClass = document.querySelector(".last-name");
    var universityClass = document.querySelector(".university");
    var passwordClass = document.querySelector(".password");
    var confirmPasswordClass = document.querySelector(".confirm");
    var fieldHintEmail = document.querySelector(".Fields-hint-email");
    var fieldHintPassword = document.querySelector(".Fields-hint-pass");

    var nameError = document.querySelector(".nameError"),
        nameErrorText = nameError.querySelector(".error-desc-txt");

    var emailError = document.querySelector(".emailError"),
        emailErrorText = emailError.querySelector(".error-desc-txt");
        
    var passwordError = document.querySelector(".passwordError"),
        passwordErrorText = passwordError.querySelector(".error-desc-txt");

    var isValidated = true;


    if(firstName == "" && lastName==""){
        nameError.classList.add("active");
        nameErrorText.innerHTML = "Please enter your name";
        firstNameClass.classList.add("active");
        lastNameClass.classList.add("active");
        isValidated = false;
    }else{
        if (firstName == "") {
            firstNameClass.classList.add("active");
            nameError.classList.add("active");
            nameErrorText.innerHTML = "Enter first name";
            isValidated = false;
        }else if (lastName == "") {
            lastNameClass.classList.add("active");
            nameError.classList.add("active");
            nameErrorText.innerHTML = "Enter last name";
            isValidated = false;
        } else {
            firstNameClass.classList.remove("active");
            lastNameClass.classList.remove("active");
            nameError.classList.remove("active");
            nameErrorText.innerHTML = "";
        }
    }

    if (university == "") {
        universityClass.classList.add("active");
        emailError.classList.add("active");
        emailErrorText.innerHTML = "Enter email";
        fieldHintEmail.style.display = "none";
        isValidated = false;
    } else {
        universityClass.classList.remove("active");
        emailError.classList.remove("active");
        emailErrorText.innerHTML = "";
        fieldHintEmail.style.display = "block";
        if(verifySchoolEmail(university)){
            if(university.includes(".edu.ph")){
                fieldHintEmail.style.display = "none";
            }else{
                alert("Please enter a valid univer email");
                universityClass.classList.add("active");
                emailError.classList.add("active");
                emailErrorText.innerHTML = "Please enter a valid university email";
                fieldHintEmail.style.display = "none";
                isValidated = false;    
            }
        }else{
            universityClass.classList.add("active");
            emailError.classList.add("active");
            emailErrorText.innerHTML = "Please enter a valid university email";
            fieldHintEmail.style.display = "none";
            isValidated = false;    
        }
    }

    if(password== "" && confirmPassword == ""){
        passwordClass.classList.add("active");
        passwordError.classList.add("active");
        confirmPasswordClass.classList.add("active");
        passwordError.classList.add("active");
        passwordErrorText.innerHTML = "Enter password";
        fieldHintPassword.style.display = "none";
        isValidated = false;
    }else if(password== "" || confirmPassword == ""){
        passwordClass.classList.remove("active");
        passwordError.classList.remove("active");
        confirmPasswordClass.classList.remove("active");
        passwordError.classList.remove("active");
        if(password == "") {
            passwordClass.classList.add("active");
            passwordError.classList.add("active");
            passwordErrorText.innerHTML = "Enter confirm password";
            fieldHintPassword.style.display = "none";
        }else if(confirmPassword == "") {
            confirmPasswordClass.classList.add("active");
            passwordError.classList.add("active");
            passwordErrorText.innerHTML = "Enter confirm password";
            fieldHintPassword.style.display = "none";
        } else {
            passwordClass.classList.remove("active");
            confirmPasswordClass.classList.remove("active");
            passwordError.classList.remove("active");
            passwordErrorText.innerHTML = "";
            fieldHintPassword.style.display = "block";
        }
        isValidated = false;
    }else if(password != confirmPassword){
        confirmPasswordClass.classList.add("active");
        passwordError.classList.add("active");
        passwordErrorText.innerHTML = "Password does not match";
        fieldHintPassword.style.display = "none";
        isValidated = false;
    }else{
        passwordClass.classList.remove("active");
        confirmPasswordClass.classList.remove("active");
        passwordError.classList.remove("active");
        passwordErrorText.innerHTML = "";
        fieldHintPassword.style.display = "none";
        
    }

    return isValidated;
}

function validateFieldForm2() {
    var universityId = document.getElementById("university-id").value;
    var universityName = document.getElementById("university-name").value;
    try{
        var collegeDepartment = document.getElementById("college-department").value;
        var course = document.getElementById("course").value;
        var collegeDepartmentClass = document.querySelector(".college-department");
        var courseClass = document.querySelector(".course");

        var collegeDeptError = document.querySelector(".collegeDeptError"),
            collegeDeptErrorText = collegeDeptError.querySelector(".error-desc-txt");

        var courseError = document.querySelector(".courseError"),
            courseErrorText = courseError.querySelector(".error-desc-txt");

    }catch(e){

    }
    
    var universityIdClass = document.querySelector(".university-id");
    var universityNameClass = document.querySelector(".university-name");


    var universityIdError = document.querySelector(".universityIdError"),
        universityIdErrorText = universityIdError.querySelector(".error-desc-txt");

    var universityNameError = document.querySelector(".universityNameError"),
        universityNameErrorText = universityNameError.querySelector(".error-desc-txt");
 

    var isValidated = true;

    if(universityId == ""){
        universityIdClass.classList.add("active");
        universityIdError.classList.add("active");
        universityIdErrorText.innerHTML = "Enter university id";
        isValidated = false;
    }else{
        universityIdClass.classList.remove("active");
        universityIdError.classList.remove("active");
        universityIdErrorText.innerHTML = "";
    }

    if(universityName == ""){
        universityNameClass.classList.add("active");
        universityNameError.classList.add("active");
        universityNameErrorText.innerHTML = "Enter university name";
        isValidated = false;
    }else{
        universityNameClass.classList.remove("active");
        universityNameError.classList.remove("active");
        universityNameErrorText.innerHTML = "";
    }

    try{
        if(collegeDepartment == ""){
            collegeDepartmentClass.classList.add("active");
            collegeDeptError.classList.add("active");
            collegeDeptErrorText.innerHTML = "Enter college department";
            isValidated = false;
        }else{
            collegeDepartmentClass.classList.remove("active");
            collegeDeptError.classList.remove("active");
            collegeDeptErrorText.innerHTML = "";
        }

        if(course == ""){
            courseClass.classList.add("active");
            courseError.classList.add("active");
            courseErrorText.innerHTML = "Enter course";
            isValidated = false;
        }else{
            courseClass.classList.remove("active");
            courseError.classList.remove("active");
            courseErrorText.innerHTML = "";
        }
    }catch(e){

    }


    return isValidated;
}

function validateFieldForm3(){
    var universityIdImg = document.getElementById("university-id-img").value;

    var universityIdImgClass = document.querySelector(".university-id-img");

    var evsIdError = document.querySelector(".evsIdError"),
        evsIdErrorText = evsIdError.querySelector(".error-desc-txt");

    var isValidated = true;

    if(universityIdImg == ""){
        universityIdImgClass.classList.add("active");
        evsIdError.classList.add("active");
        evsIdErrorText.innerHTML = "Enter university id";
        isValidated = false;
    }else{
        universityIdImgClass.classList.remove("active");
        evsIdError.classList.remove("active");
        evsIdErrorText.innerHTML = "";
    }
}

function verifySchoolEmail(email) {
    let res = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return res.test(email);
}

function confirmPassword(password, confirmPassword) {
    return password == confirmPassword;
}

let timeout;

// traversing the DOM and getting the input and span using their IDs

var password = document.getElementById("password");
var passwordClass = document.querySelector(".password");
var placholder = document.querySelector(".placeholder-pass");
var passwordError = document.querySelector(".passwordError"),
passwordErrorText = passwordError.querySelector(".error-desc-txt");
var fieldHintPassword = document.querySelector(".Fields-hint-pass");


// The strong and weak password Regex pattern checker

let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')

password.addEventListener("input", () => {

    //The badge is hidden by default, so we show it

    clearTimeout(timeout);

    //We then call the StrengChecker function as a callback then pass the typed password to it

    timeout = setTimeout(() => StrengthChecker(password.value), 500);

    //Incase a user clears the text, the badge is hidden again

    if(password.value.length !== 0){
       // strengthBadge.style.display != 'block'
    } else{
       // strengthBadge.style.display = 'none'
    }
});

function StrengthChecker(PasswordParameter){
    // We then change the badge's color and text based on the password strength
    console.log(PasswordParameter);
    if(strongPassword.test(PasswordParameter)) {
        passwordClass.classList.add("strong");
        placholder.classList.add("strong");
        passwordError.classList.add("strong");

        passwordClass.classList.remove("medium");
        passwordClass.classList.remove("weak");
        placholder.classList.remove("medium");
        placholder.classList.remove("weak");
        passwordError.classList.remove("medium");
        passwordError.classList.remove("weak");

        passwordError.classList.remove("active");
        passwordError.classList.add("active");
        passwordErrorText.innerHTML = "Strong Password";
        fieldHintPassword.style.display = "none";


    } else if(mediumPassword.test(PasswordParameter)){
        passwordClass.classList.add("medium");
        placholder.classList.add("medium");
        passwordError.classList.add("medium");

        passwordClass.classList.remove("strong");
        passwordClass.classList.remove("weak");
        placholder.classList.remove("strong");
        placholder.classList.remove("weak");
        passwordError.classList.remove("strong");
        passwordError.classList.remove("weak");

        passwordError.classList.remove("active");
        passwordError.classList.add("active");
        passwordErrorText.innerHTML = "Medium Password";
        console.log("Medium Password");
        fieldHintPassword.style.display = "none";

    } else{
        passwordClass.classList.add("weak");
        placholder.classList.add("weak");
        passwordError.classList.add("weak");

        passwordClass.classList.remove("medium");
        passwordClass.classList.remove("strong");
        placholder.classList.remove("medium");
        placholder.classList.remove("strong");
        passwordError.classList.remove("medium");

        passwordError.classList.remove("active");
        passwordError.classList.add("active");
        passwordErrorText.innerHTML = "Weak Password";
        fieldHintPassword.style.display = "none";

    }
}

function showHidePassword(){
    var passwordClass = document.querySelector(".password");
    var confirmPasswordClass = document.querySelector(".confirm");

    if(passwordClass.type == "password" && confirmPasswordClass.type == "password"){
        passwordClass.type = "text";
        confirmPasswordClass.type = "text";
    }else{
        passwordClass.type = "password";
        confirmPasswordClass.type = "password";
    }
}
// navigation
$("#sign-in-btn").click(function(){
   window.location.href = "/";
});

$("#form-2-back").click(function(){
    form1SlideRight();
});

$("#form-3-back").click(function(){
    form2SlideRight();
});

// form --------------------------------

$("#next-btn").click(function() {
    if(validateField()){
        $("#register-form-1").submit();
    }
});

$("#next-form-btn").click(function() {
    if(validateFieldForm2()){
        $("#register-form-2").submit();
    }
});

$("#submit-btn").click(function() {
    if(validateFieldForm3()){
        $("#register-form-3").submit();
    }
});

$(document).ready(function(){
    $("#register-form-1").on("submit",function(e){
        e.preventDefault();
        var form_data = new FormData(this);     
        $.ajax({
            url : "/form1",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            success:function(data){
                console.log(data);
            }     
        });
        form1Slide();
    });
});

$(document).ready(function(){
    $("#register-form-2").on("submit",function(e){
        e.preventDefault();
        form2SlideLeft(); 
    });
});


$(document).ready(function(){
    $("#register-form-3").on("submit",function(e){
        e.preventDefault();

    });
});

let uploadID = document.getElementById("university-id-img");
let idContainer = document.querySelector(".id-container");  

uploadID.addEventListener("change", function(){
    const file = this.files[0];
    if(file){
      const reader = new FileReader();
      reader.onload = function(){
        const result = reader.result;
        idContainer.src = result;
      }
      reader.readAsDataURL(file);
    } 
});

function form1Slide(){
    $(".form-1").addClass("to-left");
    $(".form-2").addClass("from-right");

}

function form1SlideRight(){
    $(".form-1").removeClass("to-left");
    $(".form-2").removeClass("from-right");
    $("#password").val("");
    $(".password").removeClass("strong");
    $(".password").removeClass("medium");
    $(".password").removeClass("weak");

    $("#confirm").val("");

}

function form2SlideLeft(){
    $(".form-2").removeClass("from-right");
    $(".form-2").addClass("to-left");
    $(".form-3").addClass("from-right");
}

function form2SlideRight(){
    $(".form-2").removeClass("to-left");
    $(".form-2").addClass("from-right");
    $(".form-3").removeClass("from-right");
}



    let suggestions = [];

    var xhr = new XMLHttpRequest();
    xhr.open('POST', "/populate");
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


    const searchWrapper = document.querySelector(".field-Univ");
    const inputBox = searchWrapper.querySelector(".university-name");
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


