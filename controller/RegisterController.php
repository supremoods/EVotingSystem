<?php
    // requre_once SqlQuery.php

    require_once ('../model/SqlQuery.php');


    // jump to this part
    // if an exception occurred

    // Class Register Controller
    class RegisterController extends SqlQuery {
        // check properties if they are empty
        public function checkProperties() {
            if (
                !empty($this->getImageSrc()) &&
                !empty($this->getUserLevel()) &&
                !empty($this->getUniversity()) &&
                !empty($this->getUniversityID()) &&
                !empty($this->getFirstName()) &&
                !empty($this->getMiddleName()) &&
                !empty($this->getLastName()) &&
                !empty($this->getEmail()) &&
                !empty($this->getPassw()) 
              ) {

                return true;
                
            }else{


              return false;
              
            }
        }
        // method to insert a new userAccount into the database
        public function insert(SqlQuery $sqlQuery){
            $sqlQuery->insertUserAccount();
        }

    }


    $img_src = $_FILES['image']['name'];
    $path = "../vendor/img/profile_pic/".basename($img_src);
    $profession = $_POST['profession'];
    $university = $_POST['university'];
    $universityID = $_POST['universityId'];
    $first_name = $_POST['fName'];
    $middle_name = $_POST['mName'];
    $last_name = $_POST['lName'];
    $email = $_POST['email'];
    $passw = $_POST['password'];
    $encryptPass = password_hash($passw, PASSWORD_DEFAULT);


    // object of the class RegisterController
    $registerController = new RegisterController(
        "NULL",
        $img_src,
        $profession,
        $university,
        $universityID,
        "NULL",
        $first_name,
        $middle_name,
        $last_name,
        $email,
        $encryptPass,
        "NULL",
        "NULL",
        "NULL"
    );
           
    // check if the properties are empty
    if($registerController->checkProperties()) {
        if($registerController->insertUserAccount()){
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
            echo json_encode(array('message' => 'success'));
        }else{
            echo json_encode(array('message' => 'failed'));
        }
    }else{
        echo json_encode(array('message' => 'failed'));
    }
   
  
?>