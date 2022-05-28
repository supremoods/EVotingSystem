<?php

    // Path: index.php
    // Compare this snippet from view\evs\auth.php:
    // include('views/evs/auth.php');

    // require once database connection
    require_once('config/ConfigDB.php');

    // require once the class UserAccount
    require_once('model/UserAccount.php');

    // require once the class SqlQuery
    require_once('model/SqlQuery.php');

    // Create a new Database object
    $database = new Database();

    // Create a new UserAccount object
    $userAccount = new UserAccount(
        "NULL", 
        "student", 
        "Technological University of the Philippines",
        "TUPM-19-2343", 
        "NULL",
        "John", 
        "Along", 
        "Lappay", 
        "john.lappay@tup.edu.ph", 
        "2has982bns88i2ha", 
        "NULL", 
        "NULL", 
        "NULL"
    );

    // Create a new SqlQuery object
    $sqlQuery = new SqlQuery(
        $userAccount->id, 
        $userAccount->userLevel, 
        $userAccount->university, 
        $userAccount->universityID, 
        $userAccount->userID, 
        $userAccount->first_name, 
        $userAccount->middle_name, 
        $userAccount->last_name, 
        $userAccount->email, 
        $userAccount->passw, 
        $userAccount->status, 
        $userAccount->time_stamp_in, 
        $userAccount->time_stamp_out
    );


    // call the insertUserAccount method
        $sqlQuery->insertUserAccount();

    // $sqlQuery->printAllUserAccounts();


?>
