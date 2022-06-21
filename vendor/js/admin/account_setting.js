function editAccount(){
    let card = document.querySelector('.edit-admin-credential-wrapper');
    card.classList.toggle('active');

    clearInputEdit();
}

function addAdmin(){
    let card = document.querySelector('.add-admin-credential-wrapper');
    card.classList.toggle('active');

    clearInput();
}

function error(){
    let error = document.querySelector('.error');
    let textBox = document.querySelector('.password');
    error.classList.toggle('active');
    textBox.classList.toggle('error');
}

function clearInput(){
    let textBox = document.querySelector('.add-password');
    let textBoxConfirm = document.querySelector('.add-confirm-password');
    let user_id = document.querySelector('.user_id');

    textBox.value = '';
    textBoxConfirm.value = '';
    user_id.value = '';
}


function clearInputEdit(){
    let textBoxPass = document.querySelector('.new-admin-password');
    let textBoxConfirmPass = document.querySelector('.new-confirm-password');

    textBoxPass.value = '';
    textBoxConfirmPass.value = '';

}

function validatePassword(){
    let password = document.querySelector('.add-password');
    let confirmPassword = document.querySelector('.add-confirm-password');
    let error = document.querySelector('.error');
    if(password.value != confirmPassword.value && !isPoorPassword){
        error.classList.toggle('active');
        password.classList.toggle('active');
        confirmPassword.classList.toggle('active');
        return false;
    }else if(password.value != confirmPassword.value && isPoorPassword){
        error.classList.toggle('active');
        password.classList.toggle('active');
        confirmPassword.classList.toggle('active');
        return false;
    }else if(password.value == confirmPassword.value && isPoorPassword){
        password.classList.toggle('active');
        return false;
    }else{
        return true;
    }
}
 
//load admin list once the page is loaded
$(document).ready(function(){
    $(".admin-list-content-items-load").load("/loadAdminList");
});

$(document).ready(function(){
    $(".admin-content-items-container").load("/loadAdminInfo");
});

$(document).ready(function(){
    $("#pwpc").load("/loadUserNameNavbar");
});

$(document).ready(function(){
    $(".load-info").load("/loadUserNameSidebar");
});


function deleteAdmin(id){
    $(".admin-list-content-items-load").load("/deleteAdmin",{
        id: id
    });
    $(".admin-list-content-items-load").load("/loadAdminList");
}

let passwordInput = document.querySelector('#passwordInput input[type="password"]');
let passwordStrength= document.getElementById('passwordStrength');
let poor = document.querySelector('#passwordStrength #poor');
let weak = document.querySelector('#passwordStrength #weak');
let strong = document.querySelector('#passwordStrength #strong');
let passwordInfo = document.getElementById('passwordInfo');
let isPoorPassword = false;
let poorRegExp = /[a-z]/;
let weakRegExp = /(?=.*?[0-9])/;;
let strongRegExp = /(?=.*?[#?!@$%^&*-])/;
let whitespaceRegExp = /^$|\s+/;


$("#password").keyup(function (event) {

    let passwordValue= passwordInput.value;
    let passwordLength= passwordValue.length;
    let poorPassword= passwordValue.match(poorRegExp);
    let weakPassword= passwordValue.match(weakRegExp);
    let strongPassword= passwordValue.match(strongRegExp);
    let whitespace= passwordValue.match(whitespaceRegExp);

    if(passwordValue != ""){
        passwordStrength.style.display = "block";
        passwordStrength.style.display = "flex";
        passwordInfo.style.display = "block";
        passwordInfo.style.color = "black";
        if(whitespace){
            passwordInfo.textContent = "whitespaces are not allowed";
        }else{
            poorPasswordStrength(passwordLength, 
                poorPassword, 
                weakPassword, 
                strongPassword);

            weakPasswordStrength(passwordLength, 
                poorPassword,
                weakPassword, 
                strongPassword);

            strongPasswordStrength(passwordLength, 
                poorPassword, 
                weakPassword, 
                strongPassword);
        }
    }else{
        passwordStrength.style.display = "none";
        passwordInfo.style.display = "none";
    }
  });

  
function poorPasswordStrength(passwordLength, 
    poorPassword, 
    weakPassword, 
    strongPassword){

    if(passwordLength <= 3 && (poorPassword || weakPassword || strongPassword)){
        poor.classList.add("active");
        passwordInfo.style.display = "block";
        passwordInfo.style.color = "red";
        passwordInfo.textContent = "Your password is too Poor";
        
        isPoorPassword = true;
    }

}

function weakPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword){
    if(passwordLength>= 4 && poorPassword && (weakPassword || strongPassword))
    {
        weak.classList.add("active");
        passwordInfo.textContent = "Your password is Weak";
        passwordInfo.style.color = "orange";
        isPoorPassword = false;
    }else{
        weak.classList.remove("active");
    }
}

function strongPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword){
    if(passwordLength >= 6 && (poorPassword && weakPassword) && strongPassword){
        poor.classList.add("active");
        weak.classList.add("active");
        strong.classList.add("active");
        passwordInfo.textContent = "Your password is strong";
        passwordInfo.style.color = "green";
        isPoorPassword = false;
    }else{
        strong.classList.remove("active");
    }
}

let showHide = document.querySelector('#passwordInput #showHide');

showHide.onclick = function(){
    showHidePassword()
}

function showHidePassword(){
    if(passwordInput.type == "password"){
        passwordInput.type = "text";
        showHide.textContent = "HIDE";
        showHide.style.color = "green";
    }else{
        passwordInput.type = "password";
        showHide.textContent = "SHOW";
        showHide.style.color = "red";
    }
}

$(document).ready(function(){
    $("#add-admin").on("submit",function(e){
        e.preventDefault();
        if(validatePassword()){
            var form_data = new FormData(this);     
            $.ajax({
                url : "/addAdmin",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                processData:false,
                contentType:false,
                success:function(data){
                    console.log(data);
                    const message = {status: "success"};
                    if(JSON.stringify(data) == JSON.stringify(message)){
                        clearInput();
                        addAdmin();
                        $(".admin-list-content-items-load").load("/loadAdminList");
                    }else{
                        console.log(data);
                        console.log("validatePassword");
                    }
                },
                error: function (request, status, error) {
              
                    console.log(request.responseText);
                 } 
            });
        }
    });
});



// ----------------------- edit admin -----------------------------
function newValidatePassword(){
    let password = document.querySelector('.new-admin-password');
    let confirmPassword = document.querySelector('.new-confirm-password');
    let error = document.querySelector('.new-error');
    if(password.value != confirmPassword.value && !isNewPoorPassword){
        error.classList.toggle('active');
        password.classList.toggle('active');
        confirmPassword.classList.toggle('active');
        return false;
    }else if(password.value != confirmPassword.value && isNewPoorPassword){
        error.classList.toggle('active');
        password.classList.toggle('active');
        confirmPassword.classList.toggle('active');
        return false;
    }else if(password.value == confirmPassword.value && isNewPoorPassword){
        password.classList.toggle('active');
        return false;
    }else{
        return true;
    }
}
 

let newPasswordInput = document.querySelector('#new-passwordInput input[type="password"]');
let newPasswordStrength= document.getElementById('new-passwordStrength');
let newPoor = document.querySelector('#new-passwordStrength #new-poor');
let newWeak = document.querySelector('#new-passwordStrength #new-weak');
let newStrong = document.querySelector('#new-passwordStrength #new-strong');
let newPasswordInfo = document.getElementById('new-passwordInfo');
let isNewPoorPassword = false;
let newPoorRegExp = /[a-z]/;
let newWeakRegExp = /(?=.*?[0-9])/;;
let newStrongRegExp = /(?=.*?[#?!@$%^&*-])/;
let newWhitespaceRegExp = /^$|\s+/;


$("#new-password").keyup(function (event) {

    let newPasswordValue= newPasswordInput.value;
    let newPasswordLength= newPasswordValue.length;
    let newPoorPassword= newPasswordValue.match(newPoorRegExp);
    let newWeakPassword= newPasswordValue.match(newWeakRegExp);
    let newStrongPassword= newPasswordValue.match(newStrongRegExp);
    let newWhiteSpace= newPasswordValue.match(newWhitespaceRegExp);

    if(newPasswordValue != ""){
        newPasswordStrength.style.display = "block";
        newPasswordStrength.style.display = "flex";
        newPasswordInfo.style.display = "block";
        newPasswordInfo.style.color = "black";
        if(newWhiteSpace){
            newPasswordInfo.textContent = "whitespaces are not allowed";
        }else{
            newPoorPasswordStrength(newPasswordLength, 
                newPoorPassword, 
                newWeakPassword, 
                newStrongPassword);

            newWeakPasswordStrength(newPasswordLength, 
                newPoorPassword,
                newWeakPassword, 
                newStrongPassword);

            newStrongPasswordStrength(newPasswordLength, 
                newPoorPassword, 
                newWeakPassword, 
                newStrongPassword);
        }
    }else{
        newPasswordStrength.style.display = "none";
        newPasswordInfo.style.display = "none";
    }
  });

  
function newPoorPasswordStrength(newPasswordLength, 
    newPoorPassword, 
    newWeakPassword, 
    newStrongPassword){

    if(newPasswordLength <= 3 && (newPoorPassword || newWeakPassword || newStrongPassword)){
        newPoor.classList.add("active");
        newPasswordInfo.style.display = "block";
        newPasswordInfo.style.color = "red";
        newPasswordInfo.textContent = "Your password is too Poor";
        
        isNewPoorPassword = true;
    }

}

function newWeakPasswordStrength(newPasswordLength, newPoorPassword, newWeakPassword, newStrongPassword){
    if(newPasswordLength>= 4 && newPoorPassword && (newWeakPassword || newStrongPassword))
    {
        newWeak.classList.add("active");
        newPasswordInfo.textContent = "Your password is Weak";
        newPasswordInfo.style.color = "orange";
        isNewPoorPassword = false;
    }else{
        newWeak.classList.remove("active");
    }
}

function newStrongPasswordStrength(newPasswordLength, newPoorPassword, newWeakPassword, newStrongPassword){
    if(newPasswordLength >= 6 && (newPoorPassword && newWeakPassword) && newStrongPassword){
        newPoor.classList.add("active");
        newWeak.classList.add("active");
        newStrong.classList.add("active");
        newPasswordInfo.textContent = "Your password is strong";
        newPasswordInfo.style.color = "green";
        isNewPoorPassword = false;
    }else{
        newStrong.classList.remove("active");
    }
}

let newShowHide = document.querySelector('#new-passwordInput #new-showHide');

newShowHide.onclick = function(){
    newShowHidePassword()
}

function newShowHidePassword(){
    if(newPasswordInput.type == "password"){
        newPasswordInput.type = "text";
        newShowHide.textContent = "HIDE";
        newShowHide.style.color = "green";
    }else{
        newPasswordInput.type = "password";
        newShowHide.textContent = "SHOW";
        newShowHide.style.color = "red";
    }
}

$(document).ready(function(){
    $("#edit-admin").on("submit",function(e){
        e.preventDefault();
        if(newValidatePassword()){
            var form_data = new FormData(this);     
            $.ajax({
                url : "/editAdmin",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                processData:false,
                contentType:false,
                success:function(data){
                    console.log(data);
                    const message = {status: "success"};
                    if(JSON.stringify(data) == JSON.stringify(message)){
                        clearInputEdit();
                        $(".admin-content-items-container").load("/loadAdminInfo");
                        $(".load-info").load("/loadUserNameSidebar");
                        $("#pwpc").load("/loadUserNameNavbar");
                        editAccount();
                    }
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                 } 
            });
        }
    });
});

// upload image section

let changeAvatar = document.querySelector('#change-avatar');
let adminAvatar = document.querySelector('#admin-avatar');
let submitBtn = document.querySelector('#submit-btn');

function triggerUpload(){
    changeAvatar.click();
}

function UploadImage() {               
    changeAvatar.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
          const reader = new FileReader();
          reader.onload = function(){
            const result = reader.result;
            adminAvatar.src = result;
          }
          reader.readAsDataURL(file);
          submitBtn.click();
        } 
    });
}   

$(document).ready(function(){
    $("#upload-avatar").on("submit",function(e){
        e.preventDefault();
        var form_data = new FormData(this); 
        $.ajax({
            url : "/uploadAvatar",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            success:function(data){
                console.log(data);
                $(".load-info").load("/loadUserNameSidebar");
                $("#pwpc").load("/loadUserNameNavbar");
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            } 
        });
        
    });
});