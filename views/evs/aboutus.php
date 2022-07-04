
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- call css header -->
    <link rel="stylesheet" href="../vendor/css/header.css" />
    <link rel="stylesheet" href="../vendor/css/style.css" />
    <link rel="stylesheet" href="vendor/css/footer.css" />
    <link rel="stylesheet" href="../vendor/css/root.css" />
    <link rel="stylesheet" href="../vendor/css/aboutus.css" />
    <link rel="shortcut icon" href="../vendor/img/logo/evs_logo_blue.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>

<body>
    <div id="root">
        <?php require_once('views/templates/header.php'); ?>
        <div class="about_layout_wrapper">
            
            <div class="about_content_wrapper">
                <div class="header">
                    <h6 class="headertext"> About Us </h6>
                    <br>
                </div>

                <div class="content">
                    <p>A web-based system called the Online Election System is powered by HTML, CSS, JavaScript, and PHP. It is a system of voting designed for university elections. The system enables users to register, vote, change their profiles, and take part in discussion forums. Additionally, it features a separate account for the admin, facilitator, and system administrator. The total number of students registered, the total number of users registered per university, and the total number of engagements in the forum may all be viewed in the system administrator account's dashboard. They can create and remove elections, verify students, modify profiles, and examine the total number of students and the rankings of elections in the admin facilitator. </p>
                    <br>
                    <p>As stated above, the system is composed of three primary accounts. The system administrator is responsible for verifying the facilitators and the election itself. The facilitator has the obligation of creating an election, verifying and limiting the students who can vote, viewing the result of the election, and can view and join the forum discussion. Lastly, the students or the users have the capability to exercise their voting rights in the university election.  </p>
                </div>
                
            </div>
            
        </div>
        
    </div>
     <?php require_once("views/templates/footer.php"); ?>
    <!-- call app js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../vendor/js/global.js"></script>
    <script src="../vendor/js/<?=$jsfile?>"></script>

</body>
</html>