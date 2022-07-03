<?php
    require_once ('model/VotesSqlQuery.php');
    require_once ('model/ElectionSqlQuery.php');

    class GetVoteCountsController extends VotesSqlQuery{
        public function getVoteCounts(){
            $electionSqlQuery = new ElectionSqlQuery();
            
            $evs_id = $_SESSION['userID'];
            $partylist = $electionSqlQuery->selectPartylist($evs_id);

            $partylist_1 = array();
            $partylist_2 = array();
        
            $result = $this->selectAllCandidates($evs_id);

            $getVoteCounts = $this->fetchVoteCounts($result);

            if ($getVoteCounts->num_rows > 0) {
                while($row = $getVoteCounts->fetch_assoc()) {
                    if($partylist[0]==$row['partylist']){
                        $partylist_1[] = $row;
                    }else{
                        $partylist_2[] = $row;
                    }
                }
            }

            $data = array(
                'partylist_1' => $partylist_1,
                'partylist_2' => $partylist_2
            );

            return $data;

        }
    }

    $getVoteCountsController = new GetVoteCountsController('','');

    $dataCounts = $getVoteCountsController->getVoteCounts();

    // $partylist_1 = $data['partylist_1'];
    // $partylist_2 = $data['partylist_2'];
    echo json_encode($dataCounts);
?>