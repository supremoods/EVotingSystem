<?php
    require_once ('model/FacilitatorSqlQuery.php');

    class UploadAvatar extends FacilitatorSqlQuery{
        
        public function upload($img_src, $path){
            if($this->updateStudentAvatar($_SESSION['userAccount'], $img_src)){
                move_uploaded_file( $_FILES['image']['tmp_name'], $path);
                echo json_encode(array('message' => 'success'));

                
            }else{
                echo json_encode(array('message' => 'error'));
            }
        }


    }

    $imageSrc = $_FILES['image']['name'];
    $path = "vendor/img/profile_pic/".basename($imageSrc);

    $uploadAvatar = new UploadAvatar();

    $uploadAvatar->upload($imageSrc, $path);


?>