<?php
  if(!isset($_SESSION['userID'])){
    header("location:/facilitator");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/css/facilitator_style/header.css" />
    <link rel="stylesheet" href="../vendor/css/facilitator_style/style.css"/>
    <link rel="stylesheet" href="../vendor/css/facilitator_style/sidebar.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php 
        if($page=="dashboard"){
            echo "../vendor/css/facilitator_style/dashboard.css";
            $jsFile = "dashboard.js";
        }else if($page=="elections"){
            echo "../vendor/css/facilitator_style/elections.css";
            $jsFile = "elections.js";
        }else if($page=="students"){
            echo "../vendor/css/facilitator_style/students.css";
            $jsFile = "students.js";
        }else if($page=="report"){
            echo "../vendor/css/facilitator_style/report.css";
            $jsFile = "report.js";
        }else if($page=="forum"){
            echo "../vendor/css/facilitator_style/forum.css";
            $jsFile = "forum.js";
        }else if($page=="account_setting"){
            echo "../vendor/css/facilitator_style/account_settings.css";
            $jsFile = "account_settings.js";
        }
    ?>"/>

    <link rel="stylesheet" href="../vendor/css/root.css" />
    <title>FACILITATOR | EVS</title>
    <link rel="shortcut icon" href="../vendor/img/logo/evs_logo_blue.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>
<body>
  <div id="root">
      <?php require_once("views/templates/faci_header.php"); ?>
      <div class="layout_wrapper">
        <?php require_once("views/templates/facisidebar.php"); ?>
        <div class="content">
         <?php require_once("views/evs/facilitator/routeContent.php"); ?>
        </div>
      </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../vendor/js/facilitator/facilitator.js"></script>
  <script src="../vendor/js/facilitator/<?=$jsFile?>"></script>
</body>
</html>
