
$(".candidate-list-content").load("/loadCandidateList");



function loadcandidateProfile(id){
    let candidateProfile = document.querySelector('.candidate-profile-wrapper');
    $(".pre-loading-img").addClass("active");
    candidateProfile.classList.toggle('modal');
    $('.candidate-profile-card').empty();
    $('.candidate-profile-card').append(preloaderProfile());
    $('.candidate-profile-card').load('/loadCandidateProfileCard',{
     id: id,
    },function(){
        $(".pre-loading-img").removeClass("active");
    });

}

function loadcandidateProfileClose(){
    let candidateProfile = document.querySelector('.candidate-profile-wrapper');
    candidateProfile.classList.toggle('modal');
}
  
function preloaderProfile(){
    var preloader = '<div class="preloader"><img src="../vendor/img/loader/loading.gif" alt="" srcset=""></div>';
    return preloader;
}