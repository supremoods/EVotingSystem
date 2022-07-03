<?php
    require_once ('model/VotesSqlQuery.php');
    
    class CheckVotedController extends VotesSqlQuery{

        public function checkVote(){
            if ($this->checkIfVoted()) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
    
    }

    $voters_id = $_SESSION['userAccount'];
    $votesController = new CheckVotedController('', $voters_id);

    if ($votesController->checkVote()) {
        // if the query is successful, return true
        echo json_encode(array('voted' => true)); 
    } else {
        // if the query is not successful, return false
        echo json_encode(array('voted' => false));
    }

?>
