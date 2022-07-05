<?php

    require_once('model/FacilitatorSqlQuery.php');

    class StatusElectionController extends FacilitatorSqlQuery{

        public function getStatusElection(){
            $university = $this->getUniversity();
            $result = $this->getStatusElectionQuery($university);
            return $result;

        }

        public function getUniversity(){
            $userId = $_SESSION['userAccount'];
            $row = $this->getStudentUniversity($userId);
            return $row;
        }

    }


    $statusElection = new StatusElectionController();
    $status = $statusElection->getStatusElection();
    if ($status->num_rows > 0) {
        while($row = $status->fetch_assoc()) {
            date_default_timezone_set('Asia/Manila');
            $today = date('Y-m-d');
            $time = date('H:i:s');
            $start_time =$row['start_time'];
            $end_time = $row['end_time'];
            $date = $row['date'];
            $election=$row['status'];
            if($today == $date){
                //check if time is between start and end time
                if($time > $start_time && $time < $end_time){
                    $voting_Status = 'Ongoing';
                }else{
                    $voting_Status = 'Closed';
                }
            }else{
                $voting_Status = 'Upcoming';
            }
        }
    }
    echo json_encode(array('election' => $election,
                           'date' => $date,
                           'start_time' => $start_time,
                           'end_time' => $end_time,
                        'status' => $voting_Status));

?>