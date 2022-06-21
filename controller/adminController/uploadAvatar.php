<?php
    require_once ('model/AdminSqlQuery.php');

    class UploadAvatar extends AdminSqlQuery{
        
        public function upload($img_src, $path){
            if($this->updateAvatar($_SESSION['id'], $img_src)){
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