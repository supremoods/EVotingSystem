<?php
    // require once database connection
    require_once('config/ConfigDB.php');

    // Create a new Database object
    $database = new Database();

    // call connect method
    $database->dbConnection();

    // select all universities from database
    $query = "SELECT * FROM university";
    $result = mysqli_query($database->conn, $query);

    // get the number of rows
    $num = mysqli_num_rows($result);

    // if there are no rows in the database, display a message
    if ($num == 0) {
        echo "No universities found!";
    } else {
        // if there are rows in the database, display them
        // while ($row = mysqli_fetch_assoc($result)) {
        //     echo $row['university'] . "<br>";
        // }
        
        // echo json_encode($row);

        // pass the rows to array
        $universityList = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $universityList[] = $row['university'];
        }

        // encode the array to json
        print_r (json_encode($universityList));
    }
?>