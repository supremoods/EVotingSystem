<?php
    // destroy the session
    session_start();

    if(isset($_SESSION['userAdmin'])){
        unset($_SESSION['userAdmin']);
        header("location:/admin");
    }else if(isset($_SESSION['userAccount'])){
        unset($_SESSION['userAccount']);
        header("location:/");
    }

?>