<?php
    require_once ('model/ElectionSqlQuery.php');

    class checkIfElectionExist extends ElectionSqlQuery{
        public function checkIfElectionExist(){
            $evs_id = $_SESSION['userAccount'];

            $getFaciId = $this->getFacilitatorId($evs_id);

            $result = $this->selectElection($getFaciId);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if($row['status']=='pending'){
                        echo json_encode(array('exist' => 'pending')); 
                    }else if($row['status']=='confirmed'){
                        echo json_encode(array('exist' => 'confirmed')); 
                    }else{
                        echo json_encode(array('exist' => 'null')); 
                    }
                }
            } 
        }
    }


    $checkIfElectionExist = new checkIfElectionExist();
    
    $checkIfElectionExist->checkIfElectionExist();
       
  ?>
