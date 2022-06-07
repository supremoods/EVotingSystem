<?php
    // requre_once SqlQuery.php
    require_once ('model/SqlQuery.php');

    class RegisterController extends SqlQuery {
        // check properties if they are empty
        public $path;

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
        public function insert(){
            $this->insertUserAccount();
        }

        // register a new userAccount
        public function register(){
            if($this->checkProperties()) {
                if($this->insertUserAccount()){
                    move_uploaded_file($_FILES['image']['tmp_name'], $this->getPath());
                    echo json_encode(array('message' => 'success'));
                }else{
                    echo json_encode(array('message' => 'failed'));
                }
            }else{
                echo json_encode(array('message' => 'failed'));
            }
           
        }

        // setters for the path
        public function setPath($path){
            $this->path = $path;
        }

        // getters for the path
        public function getPath(){
            return $this->path;
        }

    }

    $img_src = $_FILES['image']['name'];
    $path = "vendor/img/profile_pic/".basename($img_src);
    $profession = $_POST['profession'];
    $university = $_POST['university'];
    $universityID = $_POST['universityId'];
    $first_name = $_POST['fName'];
    $middle_name = $_POST['mName'];
    $last_name = $_POST['lName'];
    $email = $_POST['email'];
    $passw = $_POST['password'];
    $encryptPass = password_hash($passw, PASSWORD_DEFAULT);

    $register = new RegisterController();

    $register->setImageSrc($img_src);
    $register->setUserLevel($profession);
    $register->setUniversity($university);
    $register->setUniversityID($universityID);
    $register->setFirstName($first_name);
    $register->setMiddleName($middle_name);
    $register->setLastName($last_name);
    $register->setEmail($email);
    $register->setPassw($encryptPass);
    $register->setPath($path);

    $register->register();


  
?>