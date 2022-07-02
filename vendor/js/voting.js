
// var flag = true;

// if(flag){
//     $(document).ready(function(){
//         $(".voting-wrapper-items").load("/loadVotingList");
//     });
//     flag = false;
// }


function voteClick() {
    for(let i=0; i<document.querySelectorAll(".partylist_1").length; i++){
        document.querySelectorAll(".partylist_1")[i].onclick = () =>{
            document.querySelectorAll(".partylist_1")[i].classList.add("active");
            document.querySelectorAll(".partylist_2")[i].classList.remove("active");
        }
    }
    
    for(let i=0; i<document.querySelectorAll(".partylist_2").length; i++){
        document.querySelectorAll(".partylist_2")[i].onclick = () =>{
            document.querySelectorAll(".partylist_2")[i].classList.add("active");
            document.querySelectorAll(".partylist_1")[i].classList.remove("active");
        }
    }   
}


$(document).ready(function(){
    $(".voting-wrapper-items").load("/loadVotingList");

});


setInterval(function(){
    voteClick();
}, 500);


for(let i=0; i<document.querySelectorAll(".navigate").length; i++){
    document.querySelectorAll(".navigate")[i].onclick = () =>{
        for(let i=0; i<document.querySelectorAll(".navigate").length; i++){
            document.querySelectorAll(".navigate")[i].classList.remove("active");
        }
        document.querySelectorAll(".navigate")[i].classList.add("active");

    }
}  