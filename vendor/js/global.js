function loadContent(content) {
    window.location.href = content;
}

function profileContent(){
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

//onclick in logout button
$('.logout').click(function(){
    alert("Logout Successful");
    window.location.href = "../../controller/LogoutController.php";
  });
  