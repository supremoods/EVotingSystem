<?php
    require_once ('model/ElectionSqlQuery.php');


    class updateCandidates extends ElectionSqlQuery{

        public function updateCandidates(){
            if($this->updateCandidatesQuery()){
                return true;
            }else{
                return false;
            }
        }

    }


    $updateCandidates = new updateCandidates();

    $image_name = $_FILES['candidate-image']['name'];
    $image_tmp = $_FILES['candidate-image']['tmp_name'];
    $path = "vendor/img/candidates/".basename($image_name);

    $updateCandidates->setId($_POST['candidate-id']);
    $updateCandidates->setImage($_FILES['candidate-image']['name']);
    $updateCandidates->setName($_POST['candidate-name']);
    $updateCandidates->setCollege($_POST['candidate-college']);
    $updateCandidates->setCourse($_POST['candidate-course']);
    $updateCandidates->setYear($_POST['candidate-year']);
    
    if($updateCandidates->updateCandidates()){
        move_uploaded_file($image_tmp, $path);

        echo json_encode(array('message' => 'success'));
    }else{
        echo json_encode(array('message' => 'failed'));
    }
    
?>