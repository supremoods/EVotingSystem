
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
    <link rel="stylesheet" href="../vendor/css/developers.css" />
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
                    <h6 class="headertext"> Meet the Team!</h6>
                    <br>
                    <p class="headerdesc"> We are students from Technological University of the Philippines</p>
                    <p class="headerdesc">taking up Bachelor of Science in Information Technology.</p>
                    <br>
                    <br>
                </div>

                <div class="content">
                    <div class="divcontent">
                        <img src="../vendor/img/developers/lappay.jpg">
                        <p>John A. Lappay</p>
                        <p class="job"><i>Lead Developer</i></p>
                        <p class="email"><u>john.lappay@tup.edu.ph</u></p>
                    </div>    
                    <div class="divcontent">
                        <img src="../vendor/img/developers/sandra.jpg">
                        <p>Ma. Sandra P. Cueto</p>
                        <p class="job"><i>Assistant Developer</i></p>
                        <p class="email"><u>masandra.cueto@tup.edu.ph</u></p>
                    </div>  
                    <div class="divcontent">
                       <img src="../vendor/img/developers/angelica.jpg">
                        <p>Ma. Angelica P. Cueto</p>
                        <p class="job"><i>UI/UX Designer</i></p>
                        <p class="email"><u>maangelica.cueto@tup.edu.ph</u></p>
                    </div >  
                      
                </div>
                <br>
                 <div class="content">
                    <div class="divcontent">
                        <img src="../vendor/img/developers/renz.jpg">
                        <p>Renz Joal Borais</p>
                        <p class="job"><i>Lead Documenter / UI Designer</i></p>
                        <p class="email"><u>renzjoal.borais@tup.edu.ph</u></p>
                    </div>  
                    <div class="divcontent">
                        <img src="../vendor/img/developers/reiner.jpg">
                        <p>Reiner B. Sabado</p>
                        <p class="job"><i>Assistant Documenter / UI Designer</i></p>
                        <p class="email"><u>reiner.sabado@tup.edu.ph</u></p>
                    </div>  
                    <div class="divcontent">
                       <img src="../vendor/img/developers/jersey.jpg">
                       <p>Jersey Ann Bantaculo</p>
                        <p class="job"><i>Assistant Documenter / UI Designer</i></p>
                        <p class="email"><u>jerseyann.bantaculo@tup.edu.ph</u></p>
                    </div>  
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