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


?>
