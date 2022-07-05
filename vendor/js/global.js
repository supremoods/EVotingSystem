function loadContent(content) {
    window.location.href = content;
}

function profileContent(){
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

//onclick in logout button
// $('.logout').click(function(){
//     alert("Logout Successful");
//     window.location.href = "../../controller/LogoutController.php";
// });


$('.logo_section').click(function(){
    window.location.href = "/";
});
  

$('.logout').click(function () {
    $.ajax({
        url: '/logoutStudent',
        type: 'post',
        success: function (data) {
            console.log(data);
            window.location.href = '/';
        },
        error: function (request, status, error) {
            console.log(request.responseText);
        } 
    });
});
