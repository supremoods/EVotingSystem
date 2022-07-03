<?php

    require_once('config/ConfigDB.php');

    class Election extends Database{

        // Properties
        public $id,
            $election_id,
            $evs_id, 
            $desc_election, 
            $date, 	
            $start_time, 
            $end_time, 
            $partylist,
            $position, 
            $name, 	 
            $college, 	 
            $course, 	 
            $year, 	 
            $image;

        // Methods
        public function getId() {
            return $this->id;
        }

        public function getElectionId() {
            return $this->election_id;
        }

        public function getEvsId() {
            return $this->evs_id;
        }

        public function getDescElection() {
            return $this->desc_election;
        }

        public function getDate() {
            return $this->date;
        }

        public function getStartTime() {
            return $this->start_timem;
        }

        public function getEndTime() {
            return $this->end_time;
        }

        public function getPartylist() {
            return $this->partylist;
        }

        public function getPosition() {
            return $this->position;
        }

        public function getName() {
            return $this->name;
        }

        public function getCollege() {
            return $this->college;
        }


        public function getCourse() {
            return $this->course;
        }


        public function getYear() {
            return $this->year;
        }


        public function getImage() {
            return $this->image;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setElectionId($election_id) {
            $this->election_id = $election_id;
        }


        public function setEvsId($evs_id) {
            $this->evs_id = $evs_id;
        }


        public function setDescElection($desc_election) {
            $this->desc_election = $desc_election;
        }


        public function setDate($date) {
            $this->date = $date;
        }


        public function setStartTime($start_time) {
            $this->start_time = $start_time;
        }


        public function setEndTime($end_time) {
            $this->end_time = $end_time;
        }

        
        public function setPartylist($partylist) {
            $this->partylist = $partylist;
        }

        public function setPosition($position) {
            $this->position = $position;
        }


        public function setName($name) {
            $this->name = $name;
        }


        public function setCollege($college) {
            $this->college = $college;
        }


        public function setCourse($course) {
            $this->course = $course;
        }


        public function setYear($year) {
            $this->year = $year;
        }


        public function setImage($image) {
            $this->image = $image;
        }




    }
?>