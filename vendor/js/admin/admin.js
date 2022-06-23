function profileContent(){
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

function loadContent(content){
   window.location.href = content;
}


$(document).ready(function(){
    $("#pwpc").load("/loadUserNameNavbar");
});

$(document).ready(function(){
    $(".load-info").load("/loadUserNameSidebar");
});

function logout(){
    $.ajax({
        url: '/logout',
        type: 'GET',
        success: function (data) {
            console.log(data);
            window.location.href = '/admin';
        },
        error: function (request, status, error) {
            console.log(request.responseText);
        } 
    });

}