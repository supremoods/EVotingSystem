function profileContent(){
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

function loadContent(content){
   window.location.href = content;
}

$('.logout').click(function(){
    alert("Logout Successful");
    window.location.href = "/logout";
});
   


