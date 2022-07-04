<?php

    require_once('model/FacilitatorSqlQuery.php');

    class StatusElectionController extends FacilitatorSqlQuery{

        public function getStatusElection(){
            $university = $this->getUniversity();
            $result = $this->getStatusElectionQuery($university);
            return $result;

        }

        public function getUniversity(){
            $userId = $_SESSION['userAccount'];
            $row = $this->getStudentUniversity($userId);
            return $row;
        }

    }


    $statusElection = new StatusElectionController();
    $status = $statusElection->getStatusElection();

    echo json_encode(array('election' => $status));

?>