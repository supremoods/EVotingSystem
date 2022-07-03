<?php
     require_once ('model/ElectionSqlQuery.php');

     class dropElection extends ElectionSqlQuery{

            public function dropElectionfunc(){
                $evs_id = $_SESSION['userID'];

                if($this->dropElectionUniv($evs_id)){
                    return true;
                }else{
                    return false;
                }
            }
     }

    $dropElection = new dropElection();
    if($dropElection->dropElectionfunc()){
        echo json_encode(array('success' => true));
    }else{
        echo json_encode(array('success' => false));
    }
?>