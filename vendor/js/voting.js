
// $(document).ready(function(){
//     $(".voting-wrapper-items").load("/loadVotingList");
// });

$.ajax({
    type: "GET",
    url: "/CheckVotedController",
    dataType: "json",
    success: function(data){
        if(data.voted){
            $(".voting-wrapper-items").load("/loadVotedCandidates");
            $(".vote-btn-item").addClass("hide");
        }else{
            $(".voting-wrapper-items").load("/loadVotingList");
            voteClick();
            $(".vote-btn-item").removeClass("hide");
        }
    }
});

var votes = [];
var previousLink = 0;

for(let i=0; i<document.querySelectorAll(".partylist_1").length; i++){
    votes.push(null);
}

function voteClick() {
    for(let i=0; i<document.querySelectorAll(".partylist_1").length; i++){
        document.querySelectorAll(".partylist_1")[i].onclick = () =>{
            pushVotes(document.querySelectorAll(".partylist_1")[i].dataset.id,i);
            document.querySelectorAll(".partylist_1")[i].dataset.boolean = "true";
            document.querySelectorAll(".partylist_2")[i].dataset.boolean = "false";
            document.querySelectorAll(".partylist_1")[i].classList.remove("empty");
            document.querySelectorAll(".partylist_2")[i].classList.remove("empty");
            document.querySelectorAll(".partylist_1")[i].classList.add("active");
            document.querySelectorAll(".partylist_2")[i].classList.remove("active");
            $(".navigate").removeClass("empty");
            document.querySelectorAll(".navigate")[previousLink].classList.add("active");
        }
    }
    
    for(let i=0; i<document.querySelectorAll(".partylist_2").length; i++){
        document.querySelectorAll(".partylist_2")[i].onclick = () =>{
            pushVotes(document.querySelectorAll(".partylist_2")[i].dataset.id,i);
            document.querySelectorAll(".partylist_2")[i].dataset.boolean = "true";
            document.querySelectorAll(".partylist_1")[i].dataset.boolean = "false";
            document.querySelectorAll(".partylist_1")[i].classList.remove("empty");
            document.querySelectorAll(".partylist_2")[i].classList.remove("empty");
            document.querySelectorAll(".partylist_2")[i].classList.add("active");
            document.querySelectorAll(".partylist_1")[i].classList.remove("active");
            $(".navigate").removeClass("empty");
            document.querySelectorAll(".navigate")[previousLink].classList.add("active");
        }
    }   
}
var clickable = false;
$(document).ready(function(){
    $.ajax({
        type: "POST",
        url: "/statusElection",
        dataType: "json",
        success: function(data){
            if(data.election=="confirmed"){
                clickable = true;
            }else if(data.election=="pending"){
                clickable = false;
            }else{
                clickable = false;
            }
        },error: function (request, status, error) {
            console.log(request.responseText);
        }    
    });
    
    
});


setInterval(function(){
    if(clickable){
        voteClick();
    }
}, 500);


for(let i=0; i<document.querySelectorAll(".navigate").length; i++){
    document.querySelectorAll(".navigate")[i].onclick = () =>{
        for(let i=0; i<document.querySelectorAll(".navigate").length; i++){
            document.querySelectorAll(".navigate")[i].classList.remove("active");
        }
        document.querySelectorAll(".navigate")[i].classList.add("active");
        previousLink = i;
    }
}  
 

function pushVotes(id,index){
    if(!votes.includes(id)){
        votes[index] = id;
    }
}


function submitVote(){
    // check if all votes are filled
    if(checkEmpty()){
        toastFail();
    }else{
        // send votes to server
        $.ajax({
            type: "POST",
            url: "/VotesController",    
            data: { votes: votes },
            beforeSend: function(){
                $(".loading").addClass("active");
                $(".voting-wrapper").addClass("active");   
            },
            complete: function(){
                $(".loading").removeClass("active");
                $(".voting-wrapper").removeClass("active");
            },
            success: function(data){
                toastSuccess();
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }  
        });
    }
}

function isContainEmptyCategory(index){
    if(document.querySelectorAll(".partylist_1")[index].dataset.category == "officers"){
        document.querySelectorAll(".navigate")[0].classList.add("empty");
        document.querySelectorAll(".navigate")[0].classList.remove("active");
    }
    if(document.querySelectorAll(".partylist_1")[index].dataset.category == "senators"){
        document.querySelectorAll(".navigate")[1].classList.add("empty");
        document.querySelectorAll(".navigate")[1].classList.remove("active");
    }
    if(document.querySelectorAll(".partylist_1")[index].dataset.category == "governors"){
        document.querySelectorAll(".navigate")[2].classList.add("empty");
        document.querySelectorAll(".navigate")[2].classList.remove("active");
    }

}

function checkEmpty(){
    if(votes.length != document.querySelectorAll(".partylist_1").length){
        for(let i=0; i<document.querySelectorAll(".partylist_1").length; i++){
            if(document.querySelectorAll(".partylist_2")[i].dataset.boolean == "false" && document.querySelectorAll(".partylist_1")[i].dataset.boolean == "false"){
                isContainEmptyCategory(i);
                document.querySelectorAll(".partylist_1")[i].classList.add("empty");
                document.querySelectorAll(".partylist_2")[i].classList.add("empty");
            }
        }
        return true;
    }else{
      return false;
    }
}


const toast = document.querySelector(".toast"),
      closeIcon = document.querySelector(".close"),
      progress = document.querySelector(".progress"),
      check = document.querySelector(".check");

let timer1, timer2;



closeIcon.addEventListener("click", () => {
    toast.classList.remove("success");
    toast.classList.remove("fail");
    check.classList.remove("success");
    check.classList.remove("fail");
    setTimeout(() => {
        progress.classList.remove("success");
        progress.classList.remove("fail");
    }, 300);

    clearTimeout(timer1);
    clearTimeout(timer2);
});


function toastSuccess(){
    toast.classList.add("success");
    progress.classList.add("success");
    check.classList.add("success");

    document.querySelector(".text-1").innerHTML = "Voting Successful";
    document.querySelector(".text-2").innerHTML = "Your votes has been submitted";
    check.innerHTML = "done";
    timer1 = setTimeout(() => {
        toast.classList.remove("success");
        check.classList.remove("success");

    }, 5000); //1s = 1000 milliseconds

    timer2 = setTimeout(() => {
        progress.classList.remove("success");
    }, 5300);
}


function toastFail(){
    toast.classList.add("fail");
    progress.classList.add("fail");
    check.classList.add("fail");

    document.querySelector(".text-1").innerHTML = "Voting Failed";
    document.querySelector(".text-2").innerHTML = "Please Vote Completely";
    check.innerHTML = "priority_high";

    timer1 = setTimeout(() => {
        toast.classList.remove("fail");
        check.classList.remove("fail");
    }, 5000); //1s = 1000 milliseconds

    timer2 = setTimeout(() => {
        progress.classList.remove("fail");
    }, 5300);
}