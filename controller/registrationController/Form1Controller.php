<?php
    // requre_once SqlQuery.php
    require_once ('model/SqlQuery.php');

    class Form1Controller extends SqlQuery {

        public function register(){
            $token = $this->user_token();
            if($this->insertStudentForm1($token)){
                echo json_encode(array('message' => 'success'));
            }else{
                echo json_encode(array('message' => 'failed'));
            }
        }

        public function user_token(){
            //Generate a random string.
            $token = bin2hex(random_bytes(8));

            return $token;
        }

    }

    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['university'];
    $password = $_POST['password'];
    $privillage = $_POST['privillage'];
    $encryptPass = password_hash($password, PASSWORD_DEFAULT);

    $form1 = new Form1Controller();

    $form1->setUserLevel($privillage);
    $form1->setFirstName($first_name);
    $form1->setLastName($last_name);
    $form1->setEmail($email);
    $form1->setPassw($encryptPass);

    $form1->register();
?>