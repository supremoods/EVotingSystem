<?php
    require_once ('model/ElectionSqlQuery.php');

    class RegisterElectionsController extends ElectionSqlQuery{
        public function registerElection(){
            if ($this->insertElection()) {
                return true;
            } else {
                return false;
            }
        }

        public function registerCandidate(){
            if ($this->insertCandidateProfile()) {
                return true;
            } else {
                return false;
            }
        }

        public function election_token(){
            //Generate a random string.
            $token = bin2hex(random_bytes(8));
            return $token;

        }
    }

    if(isset($_POST['action'])){
        if(($_POST['action']) == "add_election"){
            $election = new RegisterElectionsController();
            $election->setElectionID($election->election_token());
            $election->setEvsID($_SESSION['userID']);
            $election->setDescElection($_POST['description-election']);
            $election->setDate($_POST['election-date']);
            $election->setStartTime($_POST['start-time']);
            $election->setEndTime($_POST['end-time']);
            if($election->registerElection()){
                echo json_encode(array(
                    "status" => "success"
                ));
            }else{
                echo json_encode(array(
                    "status" => "failed"
                ));
            }
        }else if(($_POST['action']) == "update_candidates"){
            $candidate = new RegisterElectionsController();
            $govCounts = $_POST['gov_counts'];
            $formCounts = $govCounts + 12;
            $partylist = $_POST['party-name'];
            $candidate->setEvsID($_SESSION['userID']);

            $position = array();
            $image = array();
            $name = array();
            $college = array();
            $course = array();
            $year = array();
            $imageName = array();


            array_push($image, $_FILES['president-image']['name'], $_FILES['vice-president-image']['name'], $_FILES['sec-image']['name'], $_FILES['treasurer-image']['name'], $_FILES['pro-image']['name']);

            array_push($imageName, 'president-image','vice-president-image','sec-image','treasurer-image','pro-image');

            array_push($position,'president','vice-president','sec','treasurer','pro');

            array_push($name, $_POST['president-candidate-name'], $_POST['vice-pres-candidate-name'], $_POST['sec-candidate-name'], $_POST['treasurer-candidate-name'], $_POST['pro-candidate-name']);

            array_push($college, $_POST['president-college'], $_POST['vice-pres-college'], $_POST['sec-college'], $_POST['treasurer-college'], $_POST['pro-college']);

            array_push($course, $_POST['president-course'], $_POST['vice-pres-course'], $_POST['sec-course'], $_POST['treasurer-course'], $_POST['pro-course']);

            array_push($year, $_POST['president-year'], $_POST['vice-pres-year'], $_POST['sec-year'], $_POST['treasurer-year'], $_POST['pro-year']);

            for($i = 1; $i <= 7; $i++){
                array_push($image, $_FILES['senator-image-'.$i.'']['name']);
                array_push($imageName, 'senator-image-'.$i.'');
                array_push($name, $_POST['senator-candidate-name-'.$i.'']);
                array_push($college, $_POST['senator-college-'.$i.'']);
                array_push($course, $_POST['senator-course-'.$i.'']);
                array_push($year, $_POST['senator-year-'.$i.'']);
                array_push($position, 'Senator');
            }
            $card = 1;
            $count = 0;
            for($i = 1; $i <= $govCounts; $i++){
                $count++;
             
                if($count > 2){
                    $count = 1;
                    $card++;
                }
                if($i % 2 != 0){
                    array_push($image, $_FILES['gov-image-'.$card.'']['name']);
                    array_push($imageName, 'gov-image-'.$card.'');
                    array_push($name, $_POST['governor-candidate-name-cd-'.$card.'']);
                    array_push($college, $_POST['governor-college-cd-'.$card.'']);
                    array_push($course, $_POST['governor-course-cd-'.$card.'']);
                    array_push($year, $_POST['governor-year-cd-'.$card.'']);
                    array_push($position, 'Governor ( '.$_POST['college_department_'.$card.''].' )');
                }else{
                    array_push($image, $_FILES['vice-gov-image-'.$card.'']['name']);
                    array_push($imageName, 'vice-gov-image-'.$card.'');
                    array_push($name, $_POST['vice-governor-candidate-name-cd-'.$card.'']);
                    array_push($college, $_POST['vice-governor-college-cd-'.$card.'']);
                    array_push($course, $_POST['vice-governor-course-cd-'.$card.'']);
                    array_push($year, $_POST['vice-governor-year-cd-'.$card.'']);
                    array_push($position, 'Vice Governor ( '.$_POST['college_department_'.$card.''].' )');
                }
            }
         
            for($i=0; $i<$formCounts; $i++){
                $candidate->setPosition($position[$i]);
                $candidate->setName($name[$i]);
                $candidate->setCollege($college[$i]);
                $candidate->setCourse($course[$i]);
                $candidate->setYear($year[$i]);
                $candidate->setImage($image[$i]);
                $candidate->setPartyList($partylist);

                if($candidate->registerCandidate()){
                    $path ="vendor/img/candidates/".basename($image[$i]);
                    move_uploaded_file( $_FILES[$imageName[$i]]['tmp_name'], $path);
                    $foo = True;
                }else{
                    $foo = False;
                }
            }

            if($foo){
                echo json_encode(array(
                    "status" => "success"
                ));
            }else{
                echo json_encode(array(
                    "status" => "failed"
                ));
            }
        }
    }



?>