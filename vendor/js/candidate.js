




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


$(document).ready(function(){
    $.ajax({
        type: "POST",
        url: "/statusElection",
        dataType: "json",
        success: function(data){
            if(data.election==="confirmed"){
                if(data.status ==="Ongoing"){
                    $(".candidate-list-content").load("/loadCandidateList");
                }else if(data.status ==="Closed"){

                    $(".candidate-list-content").text("Election is closed");
                }else if(data.status === "Upcoming"){
                    $(".candidate-list-content").text("Election will start soon...");
                }
            }else{
                $(".candidate-list-content").text("No Election");
            }
        },error: function (request, status, error) {
            console.log(request.responseText);
        }    
    });
    
    
});
