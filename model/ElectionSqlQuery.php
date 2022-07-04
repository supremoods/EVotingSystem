<?php
   require_once ('model/Election.php');

    class ElectionSqlQuery extends Election{
        
        public function insertElection(){

            $sql = "INSERT INTO election(
                election_id,
                evs_id,
                desc_election,
                date,
                start_time,
                end_time,
                status) VALUES(

                '$this->election_id',
                '$this->evs_id',
                '$this->desc_election',
                '$this->date',
                '$this->start_time',
                '$this->end_time',
                'pending')";
            
            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function insertCandidateProfile(){
            $sql = "INSERT INTO candidates(
                evs_id,
                partylist,
                position,
                name,
                college,
                course,
                year,
                image) VALUES(
                '$this->evs_id',
                '$this->partylist',
                '$this->position',
                '$this->name',
                '$this->college',
                '$this->course',
                '$this->year',
                '$this->image'
                )";

            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }

        }

        public function getFacilitatorId($evs_id){
            $sql = "SELECT university FROM user_account WHERE user_id = '$evs_id'";
            $result = $this->dbConnection()->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $univ = $row['university'];
                }
            }
            
            $sql = "SELECT user_account.user_id
                FROM user_account
                WHERE user_account.university = '$univ'
                AND user_account.user_level = 'Facilitator'";

            $result = $this->dbConnection()->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $user_id = $row['user_id'];
                }
            }
            return $user_id;
        }

        public function selectPartylist($evs_id)
        {
            $sql = "SELECT DISTINCT candidates.partylist
                FROM election,
                    user_account
                    INNER JOIN candidates
                        ON user_account.user_id = candidates.evs_id
                        WHERE user_account.user_id = '$evs_id' ";

            $result = $this->dbConnection()->query($sql);
            $partylist = array();
            while ($row = $result->fetch_assoc()) {
                $partylist[] = $row['partylist'];
            }
            return $partylist;
        }

        public function fetchPartyCandidates($partylist){
            $sql = "SELECT election.election_id, candidates.*
                    FROM user_account
                    INNER JOIN candidates
                        ON user_account.user_id = candidates.evs_id
                    INNER JOIN election
                        ON candidates.evs_id = election.evs_id
                    WHERE candidates.partylist = '$partylist'";

            $result = $this->dbConnection()->query($sql);
    
            return $result;
        }

        public function fetchPosition($evs_id){
            $sql = "SELECT DISTINCT candidates.position
                FROM election,
                    user_account
                    INNER JOIN candidates
                        ON user_account.user_id = candidates.evs_id
                        WHERE user_account.user_id = '$evs_id' ";

            $result = $this->dbConnection()->query($sql);


            return $result;
        }

        public function selectCandidate($candidate_id){
            $sql = "SELECT * FROM candidates WHERE id = '$candidate_id'";
            $result = $this->dbConnection()->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        }

        public function updateCandidatesQuery(){
            if(!empty($this->image)){
                $sql = "UPDATE candidates SET
                name = '$this->name',
                college = '$this->college',
                course = '$this->course',
                year = '$this->year',
                image = '$this->image'
                WHERE id = '$this->id'";
            }else{
                $sql = "UPDATE candidates SET
                name = '$this->name',
                college = '$this->college',
                course = '$this->course',
                year = '$this->year'
                WHERE id = '$this->id'";
            }
           
            $result = $this->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function insertVotes($evs_id, $candidate_id){
            $sql = "INSERT INTO vote_count(
                candidate_id,
                evs_id
            ) VALUES(
                $candidate_id,
                '$evs_id'
            )";

            $result = $this->dbConnection()->query($sql);
            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }

        public function selectElection($evs_id){
            $sql = "SELECT * FROM election WHERE evs_id = '$evs_id'";
            $result = $this->dbConnection()->query($sql);

            return $result;
        }

        public function dropElectionUniv($evs_id){
            $sql = "DELETE vote_count FROM vote_count INNER JOIN candidates
              ON vote_count.candidate_id = candidates.id
              WHERE candidates.evs_id = '$evs_id'";
            $result = $this->dbConnection()->query($sql);

            $sql = "DELETE FROM total_vote_counts WHERE election_id = '$evs_id'";
            $result = $this->dbConnection()->query($sql);

            $sql = "DELETE FROM candidates WHERE evs_id = '$evs_id'";
            $result = $this->dbConnection()->query($sql);

            $sql = "DELETE FROM election WHERE evs_id = '$evs_id'";
            $result = $this->dbConnection()->query($sql);

            if ($result) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
    }
?>