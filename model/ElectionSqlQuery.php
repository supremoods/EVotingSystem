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
                end_time) VALUES(

                '$this->election_id',
                '$this->evs_id',
                '$this->desc_election',
                '$this->date',
                '$this->start_time',
                '$this->end_time')";
            
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


    }
?>