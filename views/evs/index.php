<?php
  if(!isset($_SESSION['userAccount'])){
    header("location:/");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- call css header -->
    <link rel="stylesheet" href="../vendor/css/header.css" />
    <link rel="stylesheet" href="../vendor/css/style.css" />
    <link rel="stylesheet" href="../vendor/css/modal.css" />
    <link rel="stylesheet" href="../vendor/css/root.css" />
    <link rel="shortcut icon" href="../vendor/img/logo/evs_logo_blue.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />

    <?php
        if($page=="voting"){
            echo "<link rel=\"stylesheet\" href=\"../vendor/css/voting.css\"/>";
            echo "<title>Voting | EVS</title>";
            $jsfile = "voting.js";
        }else if($page=="forum"){
            echo "<link rel=\"stylesheet\" href=\"../vendor/css/forum.css\"/>";
            echo "<title>Forum | EVS</title>";
            $jsfile = "forum.js";
        }else if($page=="leaderboard"){
            echo "<link rel=\"stylesheet\" href=\"../vendor/css/leaderboard.css\"/>";
            echo "<title>Leaderboard | EVS</title>";
            $jsfile = "leaderboard.js";
        }else if($page=="candidate"){
            echo "<link rel=\"stylesheet\" href=\"../vendor/css/candidate.css\"/>";
            echo "<title>Candidate | EVS</title>";
            $jsfile = "candidate.js";
        }
    ?>
</head>

<body>
    <div id="root">
        <?php require_once('views/templates/header.php'); ?>
        <div class="layout_wrapper">
            <?php require_once('views/templates/studentSidebar.php'); ?>
            <div class="content_wrapper">
             <?php  require_once('views/evs/routeContent.php'); ?>
            </div>
        </div>
    </div>

    <!-- call app js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../vendor/js/global.js"></script>
    <script src="../vendor/js/<?=$jsfile?>"></script>

</body>
</html>