function loadModal(){
    let loadModal = document.querySelector('.modal_load_wrapper');
    loadModal.classList.toggle('modal');
}


// function clear the input box after submit button is clicked

function clearInput(){
    $('#university').val("");
    $('#universityId').val("");
    $('#fName').val("");
    $('#mName').val("");
    $('#lName').val("");
    $('#email').val("");
    $('#password').val("");
    $('#confirmPassword').val("");
    $('#uploadProfileImg').val("");
    $('#profileImg').attr("src","");
}

function loginClearInput(){
    $('#userID').val("");
    $('#passWord').val("");
}


// function to change border color of password and confirm password

function changeBorderColor(textbox, color){
    $('.'+textbox).css("border-color",color);

}

function checkPassword(){
    password = $('#password').val();
    confirmPassword = $('#confirmPassword').val();

    if(password == "" || confirmPassword == ""){
        return;
    }
    if(password != confirmPassword){
        changeBorderColor("passBorder","red");
        return;
    }else{
        changeBorderColor("passBorder","green");
    }
}

$('input#confirmPassword').keyup(function(){
    checkPassword();
});



$(document).ready(function(){
    $("#getUserData").on("submit",function(e){
        e.preventDefault();
        var form_data = new FormData(this);     
        $.ajax({
            url : "../../controller/RegisterController.php",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){
                loadModal();
            },
            complete: function(){
                loadModal();
            },
            success:function(data){
                console.log(data);
                const message = {message: "success"};
                if(JSON.stringify(data) == JSON.stringify(message)){
                    clearInput();
                    alert("Registration Successful");
                    regModal()
                }else{
                   console.log(data);
                   alert("Registration Failed");
                }
            }     
        });
    });
});


function regModal(){
    let regModal = document.querySelector('.register_wrapper');
    regModal.classList.toggle('modal');
}

// login verification
$(document).ready(function(){
    $("#login").on("submit",function(e){
        e.preventDefault();
        var form_data = new FormData(this);     
        $.ajax({
            url : "../../controller/LoginController.php",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            success:function(data){
                console.log(data);
                const status = {status: "success"};
                if(JSON.stringify(data) == JSON.stringify(status)){
                    loginClearInput();
                    alert("Login Successful");
                    window.location.href = "forum.php";
                }else{
                   console.log(data);
                   loginClearInput();
                   alert("Login Failed");
                }
            }     
        });
    });
});
