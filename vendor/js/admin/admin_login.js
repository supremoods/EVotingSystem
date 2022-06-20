function loadModal(){
    let loadModal = document.querySelector('.modal_load_wrapper');
    loadModal.classList.toggle('modal');
}

function loginClearInput(){
    $('#username').val("");
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
            },
            error: function (request, status, error) {
                console.log(request.responseText);
             } 
        });
    });
});
