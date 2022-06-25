<?php
    // requre_once SqlQuery.php
    require_once ('model/SqlQuery.php');

    class Form2Controller extends SqlQuery {

        public function update($privillage){
            if($this->updateform2($privillage)){
                echo json_encode(array('message' => 'success'));
            }else{
                echo json_encode(array('message' => 'failed'));
            }
        }

    }
    $form2 = new Form2Controller();

    $university_id = $_POST['university-id'];
    $university_name = $_POST['university-name'];
    $privillage = $_POST['privillage'];

    if($privillage == "student"){
        $college_dept = $_POST['college-department'];
        $course = $_POST['course'];
        $form2->setCollege_dept($college_dept);
        $form2->setCourse($course);
    }

    $form2->setUniversityID($university_id);
    $form2->setUniversity($university_name);

    $form2->update($privillage);
?>