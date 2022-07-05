function validateField() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm").value;
  
    var passwordClass = document.querySelector(".password");
    var confirmPasswordClass = document.querySelector(".confirm");
  
    var passwordError = document.querySelector(".passwordError"),
    passwordErrorText = passwordError.querySelector(".error-desc-txt");
  
    
    var isValidated = true;
  
  
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


function changePasswordModal(){
  $('.new-password-modal').toggleClass('active');
  $('.account-setting-wrapper').toggleClass('active');
}

$("#change-btn").click(function() {
    validateField();
});


$(document).ready(function(){
    $("#new-password").on("submit",function(e){
        e.preventDefault();
        if(validateField()){
            var form_data = new FormData(this);     
            $.ajax({
                url : "/updatePassword",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                processData:false,
                contentType:false,
                beforeSend: function(){
                    $(".pre-loading-img").addClass("active");
                },
                complete: function(){
                    $(".pre-loading-img").removeClass("active");
                    $(".success-message").addClass("active");
                },
                success:function(data){
                    console.log(data);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }    
            });
            
        }
    });
});

function closeSuccess(){
    $("#password").val('');
    $("#confirm").val('');
    $(".success-message").removeClass("active");
    $(".password").removeClass("weak");
    $(".password").removeClass("medium");
    $(".password").removeClass("strong");
    changePasswordModal();
}


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
            url : "/uploadFacilitatorAvatar",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){  
                $(".pre-loading-update-avatar").addClass("active");
            },
            complete: function(){
                $(".pre-loading-update-avatar").removeClass("active");
            },
            success:function(data){
                console.log(data.message);
                $(".load_avatar").load("/loadUserNameSidebarFacilitator");
                $("#pwpc").load("/loadUserNameNavbarFacilitator");
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            } 
        });
        
    });
});