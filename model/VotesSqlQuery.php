<?php
   require_once ('model/Votes.php');

    class VotesSqlQuery extends Votes{
        //constructor
        public function __construct($candidate_id, $voters_id){
            $this->candidate_id = $candidate_id;
            $this->voters_id = $voters_id;
        }

        // insert votes

        public function insertVotesQuery(){
            $sql = "INSERT INTO vote_count(
                candidate_id,
                evs_id) VALUES(
                '$this->candidate_id',
                '$this->voters_id')";

            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function getVotesQuery(){
            $sql = "SELECT * FROM vote_count WHERE evs_id = '$this->voters_id'";
            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return $result;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function checkIfVoted(){
            $sql = "SELECT * FROM vote_count WHERE evs_id = '$this->voters_id'";
            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                if ($result->num_rows > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function getVoteCountsQuery(){

            $sql = " SELECT
                        candidates.id,
                        candidates.partylist,
                        candidates.`position`,
                        candidates.name
                        FROM candidates";

            $result = $this->dbConnection()->query($sql);

            // $sql = "SELECT 
            //             candidates.partylist,   
            //             candidates.`position`,
            //             candidates.name,
            //             vote_count.candidate_id,
            //             COUNT(vote_count.candidate_id) AS candidate_vote_count
            //         FROM vote_count
            //             INNER JOIN candidates
            //                 ON vote_count.candidate_id = candidates.id
            //         GROUP BY vote_count.candidate_id,
            //             candidates.`position`,
            //             candidates.name";

            // $result = $this->dbConnection()->query($sql);

            // if ($result) {
            //     // if the query is successful, return true
            //     return $result;
            // } else {
            //     // if the query is not successful, return false
            //     return false;
            // }
        }
        
        public function selectAllCandidates($evs_id){
            $sql = "SELECT * FROM candidates WHERE evs_id = '$evs_id'";
            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return $result;
            }

        }

        public function fetchVoteCounts($resultCandidates){
            if ($resultCandidates->num_rows > 0){
                while($row = $resultCandidates->fetch_assoc()){
                    $candidate_id = $row['id'];
                    $election_id = $row['evs_id'];
                    $partylist = $row['partylist'];
                    $position = $row['position'];
                    $name = $row['name'];

                    $sql = "SELECT COUNT(candidate_id) AS candidate_vote_count FROM vote_count WHERE candidate_id = '$candidate_id'";
                    $result = $this->dbConnection()->query($sql);
                    if ($result) {
                        // if the query is successful, return true
                        $row = $result->fetch_assoc();
                        $candidate_vote_count = $row['candidate_vote_count'];
                    if($this->candidateExistTotalVoteCounts($candidate_id)){
                        $sql = "UPDATE total_vote_counts SET votes = '$candidate_vote_count' WHERE candidate_id = '$candidate_id'";
                    }else{
                        $sql = "INSERT INTO total_vote_counts (
                            election_id,
                            candidate_id,
                            partylist,
                            position,
                            name,
                            votes) VALUES (
                            '$election_id',
                            $candidate_id,
                            '$partylist',
                            '$position',
                            '$name',
                            $candidate_vote_count)";
                    }
                        $result = $this->dbConnection()->query($sql);
                    } 
                }
            }

            $sql = "SELECT * FROM total_vote_counts";
            $result = $this->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return $result;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
        



        public function candidateExistTotalVoteCounts($candidate_id){
            $sql = "SELECT * FROM total_vote_counts WHERE candidate_id = '$candidate_id'";
            $result = $this->dbConnection()->query($sql);

            if ($result){
                if ($result->num_rows > 0){
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }

        }


        public function getCandidatePosition(){
            $sql = "SELECT DISTINCT
                    candidates.`position`
                    FROM candidates";

            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return $result;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
    }

?>