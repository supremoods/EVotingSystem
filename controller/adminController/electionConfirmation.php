<?php
    require_once ('model/FacilitatorSqlQuery.php');

    class electionConfirmation extends FacilitatorSqlQuery{
        public function confirm(){
            $id = $_POST['id'];
            $result = $this->confirmElection($id);
            if($result){
                echo "success";
            }else{
                echo "error";
            }
        }

        public function delete(){
            $id = $_POST['id'];
            $result = $this->rejectElection($id);
            if($result){
                echo "success";
            }else{
                echo "error";
            }
        }
    }

    $electionConfirmation = new electionConfirmation();

    if(isset($_POST['confirm'])){
        $electionConfirmation->confirm();
    }else if(isset($_POST['delete'])){
        $electionConfirmation->delete();
    }
?>