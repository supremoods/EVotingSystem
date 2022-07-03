<?php
    require_once ('model/ElectionSqlQuery.php');

    class checkIfElectionExist extends ElectionSqlQuery{
        public function checkIfElectionExist(){
            $evs_id = $_SESSION['userID'];

            $result = $this->selectElection($evs_id);

            if ($result->num_rows > 0) {
                // if the query is successful, return true
                return true;
            } else {
                // if the query is not successful, return false
                return false;
            }
        }
    }


    $checkIfElectionExist = new checkIfElectionExist();
    
    if($checkIfElectionExist->checkIfElectionExist()){
        echo json_encode(array('exist' => true)); 
    }else{
        echo json_encode(array('exist' => false));
    }
?>
