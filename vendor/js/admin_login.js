function profileContent(){
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

function loadModal(){
    let loadModal = document.querySelector('.modal_load_wrapper');
    loadModal.classList.toggle('modal');
}

function loginClearInput(){
    $('#userID').val("");
    $('#passWord').val("");
}

// login verification
$(document).ready(function(){
    $("#login").on("submit",function(e){
        e.preventDefault();
        var form_data = new FormData(this);     
        $.ajax({
            url : "adminlogin",
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
                const status = {status: "success"};
                if(JSON.stringify(data) == JSON.stringify(status)){
                    loginClearInput();
                    window.location.href = "admin/dashboard";
                }else{
                    loginClearInput();
                    alert("Login Failed");
                }
            }     
        });
    });
});

//onclick in logout button
$('.logout').click(function(){
    alert("Logout Successful");
    window.location.href = "/logout";
});
   