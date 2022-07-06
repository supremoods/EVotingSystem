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

    return isValidated;
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
    validateField();
});

$("#next-form-btn").click(function() {
    validateFieldForm2();
});

$("#submit-btn").click(function() {
    validateFieldForm3();
});

$(document).ready(function(){
    $("#register-form-1").on("submit",function(e){
        e.preventDefault();
        if(validateField()){
            var form_data = new FormData(this);     
            $.ajax({
                url : "/form1",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                processData:false,
                contentType:false,
                beforeSend: function(){
                    $(".pre-loading").addClass("active");
                },
                complete: function(){
                    $(".pre-loading").removeClass("active");
                },
                success:function(data){
                    console.log(data);
                    form1Slide();
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }    
            });
            
        }
    });
});

$(document).ready(function(){
    $("#register-form-2").on("submit",function(e){
        e.preventDefault();
        if(validateFieldForm2()){
            var form_data = new FormData(this);   
            $.ajax({
                url : "/form2",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                processData:false,
                contentType:false,
                beforeSend: function(){
                    $(".pre-loading").addClass("active");
                },
                complete: function(){
                    $(".pre-loading").removeClass("active");
                },
                success:function(data){
                    console.log(data);
                    form2SlideLeft(); 
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }    
            });
           
        }
    });
});

$(document).ready(function(){
    $("#register-form-3").on("submit",function(e){
        e.preventDefault();
        console.log("submit");
        if(validateFieldForm3()){
            console.log("submit");
            var form_data = new FormData(this);     
            $.ajax({
                url : "/form3",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                processData:false,
                contentType:false,
                beforeSend: function(){
                    $(".pre-loading").addClass("active");
                },
                complete: function(){
                    $(".pre-loading").removeClass("active");
                },
                success:function(data){
                    console.log(data);
                    window.location.href = "/";
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }    
            });
        }
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

const searchWrapper = document.querySelector(".field-Univ");
const inputBox = searchWrapper.querySelector(".university-name");
const suggBox = searchWrapper.querySelector(".autocom-box");

function loadUniversity(){

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
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        //z   userValue = inputBox.value;
        listData = `<li style="text-align:center;">---- no result ----</li>`;
    }else{
    listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

try {
    
    const searchWrapperCourses = document.querySelector(".field-courses");
    const inputBoxCourses = searchWrapperCourses.querySelector(".course");
    const suggBoxCourses = searchWrapperCourses.querySelector(".autocom-box");

    function loadUndergraduateDegree(){

        let suggestions = [
            "Bachelor of Arts in History (AB History)",
            "Bachelor of Arts in Philosophy (AB Philosophy)",
            "Bachelor of Fine Arts Major in Industrial Design (BFA)",
            "Bachelor of Fine Arts Major in Painting (BFA)",
            "Bachelor of Fine Arts Major in Sculpture (BFA)",
            "Bachelor of Fine Arts Major in Visual Communication (BFA)",
            "Bachelor of Arts in Economics (AB Economics)",
            "Bachelor of Science in Economics (BS Economics)",
            "Bachelor of Arts in Psychology (AB Psychology)",
            "Bachelor of Science in Psychology (BS Psychology)",
            "Bachelor of Science in Criminology (BS Criminology)",
            "Bachelor of Arts in Political Science (AB Political Science)",
            "Bachelor of Arts in Linguistics (AB Linguistics)",
            "Bachelor of Arts in Literature (AB Literature)",
            "Bachelor of Arts in English (AB English)",
            "Bachelor of Arts in Filipino",
            "Bachelor of Arts in Anthropology (AB Anthropology)",
            "Bachelor of Arts in Sociology (AB Sociology)",
            "Bachelor of Science in Islamic Studies (ABIS)",
            "Bachelor of Science in Environmental Science (BSES)",
            "Bachelor of Science in Forestry (BS Forestry)",
            "Bachelor of Science in Fisheries (BSFi)",
            "Bachelor of Science in Geology (BS Geology)",
            "Bachelor of Science in Biology (BS Biology)",
            "Bachelor of Science in Physics (BS Physics)",
            "Bachelor of Science in Applied Physics (BS Applied Physics)",
            "Bachelor of Science in Chemistry (BS Chemistry)",
            "Bachelor of Science in Molecular Biology (BS Molecular Biology)",
            "Bachelor of Science in Agroforestry",
            "Bachelor of Science in Computer Science (BSCS)",
            "Bachelor of Science in Information Technology (BSIT)",
            "Bachelor of Science in Information Systems (BSIS)",
            "Bachelor of Science in Mathematics (BS Mathematics)",
            "Bachelor of Science in Applied Mathematics",
            "Bachelor of Science in Statistics",
            "Bachelor of Science in Agriculture",
            "Bachelor of Science in Agribusiness",
            "Bachelor of Science in Architecture (BS Architecture)",
            "Bachelor of Science in Interior Design (BS Interior Design)",
            "Bachelor in Landscape Architecture (BLA)",
            "Bachelor of Science in Accountancy (BSA)",
            "Bachelor of Science in Accounting Technology",
            "Bachelor of Science in Agribusiness",
            "Bachelor of Science in Business Administration Major in Business Economics (BSBA)",
            "Bachelor of Science in Business Administration Major in Financial Management (BSBA)",
            "Bachelor of Science in Business Administration Major in Human Resource Development (BSBA)",
            "Bachelor of Science in Business Administration Major in Marketing Management (BSBA)",
            "Bachelor of Science in Business Administration Major in Operations Management (BSBA)",
            "Bachelor of Science in Hotel and Restaurant Management (BSHRM)",
            "Bachelor of Science in Entrepreneurship",
            "Bachelor of Science in Tourism Management (BSBA)",
            "Bachelor of Science in Real Estate Management (BSREM)",
            "Bachelor of Science in Nursing (BSN)",
            "Bachelor of Science in Physical Therapy (BSPT)",
            "Bachelor of Science in Occupational Therapy (BSOT)",
            "Bachelor of Science in in Pharmacy (BS Pharmacy)",
            "Bachelor of Science in Midwifery (BS Midwifery)",
            "Bachelor of Science in Medical Technology (BS Med Tech)",
            "Bachelor of Science in Radiologic Technology (BS Rad Tech)",
            "Bachelor of Science in Respiratory Therapy",
            "Bachelor of Science in Speech-Language Pathology",
            "Bachelor in Secondary Education (BSED)",
            "Bachelor in Elementary Education (BEED)",
            "Bachelor in Secondary Education Major in Technology and Livelihood Education (BSED)",
            "Bachelor in Secondary Education Major in Biological Sciences (BSED)",
            "Bachelor in Secondary Education Major in English (BSED)",
            "Bachelor in Secondary Education Major in Filipino (BSED)",
            "Bachelor in Secondary Education Major in Mathematics (BSED)",
            "Bachelor in Secondary Education Major in Islamic Studies (BSED)",
            "Bachelor in Secondary Education Major in Music, Arts, Physical and Health Education (BSED)",
            "Bachelor in Secondary Education Major in Physical Sciences (BSED)",
            "Bachelor in Secondary Education Major in Social Studies (BSED)",
            "Bachelor in Secondary Education Major in Values Education (BSED)",
            "Bachelor in Elementary Education Major in Preschool Education (BEED)",
            "Bachelor in Elementary Education Major in Special Education (BEED)",
            "Bachelor of Library and Information Science (BLIS)",
            "Bachelor of Physical Education",
            "Bachelor of Sports Science",
            "Bachelor of Science in Aeronautical Engineering (BS AeroE)",
            "Bachelor of Science in Chemical Engineering (BSChE)",
            "Bachelor of Science in Ceramic Engineering (BSCerE)",
            "Bachelor of Science in Civil Engineering (BSCE)",
            "Bachelor of Science in Electrical Engineering (BSEE)",
            "Bachelor of Science in Electronics and Communications Engineering (BSECE)",
            "Bachelor of Science in Geodetic Engineering (BSGE)",
            "Bachelor of Science in Geological Engineering",
            "Bachelor of Science in Industrial Engineering (BSIE)",
            "Bachelor of Science in Marine Engineering i(BSMarE)",
            "Bachelor of Science in Materials Engineering (BSMatE)",
            "Bachelor of Science in Mechanical Engineering (BSME)",
            "Bachelor of Science in Metallurgical Engineering (BSMetE)",
            "Bachelor of Science in Mining Engineering (BSEM)",
            "Bachelor of Science in Sanitary Engineering (BSSE)",
            "Bachelor of Science in Computer Engineering (BSCpE)",
            "Bachelor of Science in Agricultural Engineering (BSAE)",
            "Bachelor of Science in Petroleum Engineering (BSPE)",
            "Bachelor of Science in in Development Communication (BS DevComm)",
            "Bachelor of Arts in Journalism (AB Journalism)",
            "Bachelor of Arts in Communication (AB Communication)",
            "Bachelor of Arts in Broadcasting (AB Broadcasting)",
            "Bachelor of Science in Customs Administration (BS Customs Administration)",
            "Bachelor of Science in Community Development",
            "Bachelor of Science in Foreign Service",
            "Bachelor of Arts in International Studies",
            "Bachelor of Public Administration (BPA)",
            "Bachelor of Science in Social Work (BS Social Work)",
            "Bachelor of Science in Public Safety (BSPS)",
            "Bachelor of Science in Marine Transportation (BSMT)",
            "Bachelor of Science in Nutrition and Dietetics (BS Nutrition and Dietetics)",
            "Bachelor of Science in Forensic Science (BSFsci)",
        ];

        // if user press any key and release
        inputBoxCourses.onkeyup = (e)=>{
            let userData = e.target.value; //user enetered data
            let emptyArray = [];
            if(userData){

                emptyArray = suggestions.filter((data)=>{
                    //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                    return data.toLocaleLowerCase().includes(userData.toLocaleLowerCase());
                });
                emptyArray = emptyArray.map((data)=>{
                    // passing return data inside li tag
                    return data = `<li>${data}</li>`;
                });
                searchWrapperCourses.classList.add("active"); //show autocomplete box
                showSuggestionsCourses(emptyArray);
                let allList = suggBoxCourses.querySelectorAll("li");
                for (let i = 0; i < allList.length; i++) {
                    //adding onclick attribute in all li tag
                    allList[i].setAttribute("onclick", "selectCourses(this)");
                }
            }else{
                searchWrapperCourses.classList.remove("active"); //hide autocomplete box
            }
        }
    }

    function selectCourses(element){
        let selectData = element.textContent;
        inputBoxCourses.value = selectData;
        searchWrapperCourses.classList.remove("active");
    }

    function showSuggestionsCourses(list){
        let listData;
        if(!list.length){
            //z   userValue = inputBox.value;
            listData = `<li style="text-align:center;">---- no result ----</li>`;
        }else{
        listData = list.join('');
        }
        suggBoxCourses.innerHTML = listData;
    }

    const searchWrapperDept = document.querySelector(".field-dept");
        const inputBoxDept = searchWrapperDept.querySelector(".college-department");
        const suggBoxDept = searchWrapperDept.querySelector(".autocom-box");

    function loadCollegeDepartment(){
        
        let suggestions = [
            "College of Architecture (Archi)",
            "College of Arts and Letters (CAL)",
            "School of Economics (SE)",
            "College of Education (CEd)",
            "College of Engineering (COE)",
            "College of Fine Arts (CFA)",
            "College of Home Economics (CHE)",
            "College of Human Kinetics (CHK)",
            "College of Law (LAW)",
            "School of Library and Information Studies (SLIS)",
            "College of Mass Communication (CMC)",
            "College of Law (LAW)",
            "College of Mass Communication (CMC)",
            "College of Science (CS)",
            "College of Social Sciences and Philosophy (CSSP)",
            "COLLEGE OF INDUSTRIAL EDUCATION",
            "COLLEGE OF LIBERAL ARTS"
        ];

        inputBoxDept.onkeyup = (e)=>{
            let userData = e.target.value; //user enetered data
            let emptyArray = [];
            if(userData){

                emptyArray = suggestions.filter((data)=>{
                    //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                    return data.toLocaleLowerCase().includes(userData.toLocaleLowerCase());
                });
                emptyArray = emptyArray.map((data)=>{
                    // passing return data inside li tag
                    return data = `<li>${data}</li>`;
                });
                searchWrapperDept.classList.add("active"); //show autocomplete box
                showSuggestionsDept(emptyArray);
                let allList = suggBoxDept.querySelectorAll("li");
                for (let i = 0; i < allList.length; i++) {
                    //adding onclick attribute in all li tag
                    allList[i].setAttribute("onclick", "selectDept(this)");
                }
            }else{
                searchWrapperDept.classList.remove("active"); //hide autocomplete box
            }
        }
    }


    function selectDept(element){
        let selectData = element.textContent;
        inputBoxDept.value = selectData;
        searchWrapperDept.classList.remove("active");
    }

    function showSuggestionsDept(list){
        let listData;
        if(!list.length){
            //z   userValue = inputBox.value;
            listData = `<li style="text-align:center;">---- no result ----</li>`;
        }else{
        listData = list.join('');
        }
        suggBoxDept.innerHTML = listData;
    }
    
    loadUndergraduateDegree();
    loadCollegeDepartment();
} catch (error) {
    
}
loadUniversity();

// -------------------------------------------------------------------------------




