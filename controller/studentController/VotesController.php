<?php
    require_once ('model/VotesSqlQuery.php');
    
    class VotesController extends VotesSqlQuery{

        public function insertVotes(){
            if ($this->insertVotesQuery()) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
    
    }

    $votes = $_POST['votes'];
    $voters_id = $_SESSION['userAccount'];

    foreach($votes as $vote) {
        $votesController = new VotesController($vote, $voters_id);
        $votesController->insertVotes();
    }
    // object of the class VotesController empty constructor
?>
