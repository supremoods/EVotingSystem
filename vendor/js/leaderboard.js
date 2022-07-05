var SenatorFilled = false;
var partylist_1;
var partylist_2;

var candidateVoteCounts = [];
var candidateNames = [];


var chartIsEmpty = true;
window.addEventListener('load',function(){
    $.ajax({
        type: "POST",
        url: "/statusElection",
        dataType: "json",
        success: function(data){

            if(data.election==="confirmed"){
                $(document).ready(function(){
                    $(".chart-wrapper").load("/loadChartLeaderboards");
                });
                setInterval(() => {
                    $(document).ready(function(){
                        $.ajax({
                            type: "POST",
                            url: "/GetVoteCountsControllerLeaderBoard",
                            dataType: "JSON",
                            success: function(data){
                                if(data){
                                    partylist_1 = data.partylist_1;
                                    partylist_2 = data.partylist_2;
                                    let count = 0;
                                    if(chartIsEmpty){
                                        for(let i=0; i<document.querySelectorAll(".vote-candidates-chart").length; i++){
                                            if(JSON.stringify(partylist_1[i].position) ==="\"Senator\"" && !SenatorFilled){
                                                for (let j = 0; j < partylist_1.length; j++){
                                                    if(JSON.stringify(partylist_1[j].position) ==="\"Senator\""){
                                                        getVoteCount(j);
                                                        count++;
                                                    }
                                                }
                                                SenatorFilled = true;
                                                console.log('####');
                                                console.log(i + " " + count);
                                            }else{
            
                                                console.log('----');
                                                if(SenatorFilled){
                                                    getVoteCount((i+count)-1);
                                                }else{
                                                    getVoteCount(i);
                                                }
                                                console.log(i);
                                            }
                                
                                            var chartDataCandidates = {
                                                labels: candidateNames,
                                                datasets: [
                                                    {
                                                    label: "Vote Counts",
                                                    data: candidateVoteCounts,
                                                    backgroundColor: [
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 99, 132, 1)',
                                                    ],
                                                    borderRadius: 15
                                                    }
                            
                                                ]
                                            };
                            
                                            var voteCandidatesChart = document.querySelectorAll('.vote-candidates-chart')[i].getContext('2d');
                                            
                                            voteChart = new Chart(voteCandidatesChart, {
                                                type: 'bar',
                                                data: chartDataCandidates,
                                                options: {
                                                    plugins: {
                                                        legend: {
                                                            display: false
                                                        },
                                                    },
                                                    maintainAspectRatio: false,
                                                    indexAxis: 'y',
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });
                                            candidateNames = [];
                                            candidateVoteCounts = [];
                                        }
                                    }         
                                    chartIsEmpty = false;
                                }
                            }
                        });
                    });
                }, 1000);
                if(data.status ==="Ongoing"){

                }else if(data.status ==="Closed"){

                }else if(data.status === "Upcoming"){
                }
            }else{

            }
        },
        error: function (request, status, error) {
            console.log(request.responseText);
        } 
    });
});


// sort the array in descending order
function sortVoteCountsDesc(){
    for (let i = 0; i < candidateVoteCounts.length; ++i){
        for (let j = i + 1; j < candidateVoteCounts.length; ++j){
           if (candidateVoteCounts[i] < candidateVoteCounts[j]){
              let temp = candidateVoteCounts[i];
              candidateVoteCounts[i] = candidateVoteCounts[j];
              candidateVoteCounts[j] = temp;

              temp = candidateNames[i];
              candidateNames[i] = candidateNames[j];
              candidateNames[j] = temp;
           }
        }
     }
}


function getVoteCount(index){
    candidateNames.push(JSON.stringify(partylist_1[index].name));
    candidateNames.push(JSON.stringify(partylist_2[index].name));
    candidateVoteCounts.push(parseInt(partylist_1[index].votes));
    candidateVoteCounts.push(parseInt(partylist_2[index].votes));
    sortVoteCountsDesc();
}