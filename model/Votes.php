<?php
    require_once('config/ConfigDB.php');

    class Votes extends Database{
        public $candidate_id;
        public $voters_id;

        // constructor
        public function __construct($candidate_id, $voters_id){
            $this->candidate_id = $candidate_id;
            $this->voters_id = $voters_id;
        }
      
        // setters and getters

        public function setCandidate_id($candidate_id){
            $this->candidate_id = $candidate_id;
        }

        public function getCandidate_id(){
            return $this->candidate_id;
        }

        public function setVoters_id($voters_id){
            $this->voters_id = $voters_id;
        }

        public function getVoters_id(){
            return $this->voters_id;
        }
    }
?>
