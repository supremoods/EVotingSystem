<?php
    // requre_once SqlQuery.php
    require_once ('model/SqlQuery.php');

    class Form3Controller extends SqlQuery {

        public function update($path){
            if($this->updateform3()){
                move_uploaded_file( $_FILES['university-id-img']['tmp_name'], $path);
                echo json_encode(array('message' => 'success'));
            }else{
                echo json_encode(array('message' => 'failed'));
            }
        }

    }

    $imageSrc = $_FILES['university-id-img']['name'];
    $path = "vendor/img/id/".basename($imageSrc);

    $form3 = new Form3Controller();

    $form3->setUniversityIDImg($imageSrc);

    $form3->update($path);

?>