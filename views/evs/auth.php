<?php
if (isset($_SESSION['userAccount'])) {
    header("location:/student/voting");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>EVS | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="vendor/css/header.css" />
    <link rel="stylesheet" href="vendor/css/auth.css" />
    <link rel="stylesheet" href="vendor/css/modal.css" />
    <link rel="stylesheet" href="vendor/css/root.css" />
    <link rel="stylesheet" href="vendor/css/footer.css" />
    <link rel="shortcut icon" href="vendor/img/logo/evs_logo_blue.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>

<body>
    <div id="root">
        <?php require_once("views/templates/header.php"); ?>
        <div class="layout_wrapper">
            <div class="content_wrapper">
                <div class="login_wrapper">
                    <div class="login_card">
                        <div class="login_logo">
                            <img src="vendor/img/logo/evs_logo_blue.png" alt="" >
                        </div>
                        <div class="login_input_form">
                            <form method="post" id="login">
                                <div class="textField_wrapper">
                                    <label for="userID">User ID</label>
                                    <div class="inputContainer">
                                        <span class="material-icons">person</span>
                                        <input id="userID" name="userID" type="text" placeholder="Input your user id" required>
                                    </div>
                                </div>
                                <div class="textField_wrapper">
                                    <label for="passWord">Password</label>
                                    <div class="inputContainer">
                                        <span class="material-icons">key</span>
                                        <input id="passWord" name="passWord" type="password" placeholder="Input your password" required>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <button value="submit">Login</button>
                                </div>
                            </form>
                            <div class="sublink" onclick="cpmModal()">
                                <p>Don't have an account? <span>Register</span></p>
                            </div>
                            <div class="sublink">
                               <a class="forgot_password" href="forum">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc_wrapper">
                    <div class="desc_header">
                        <h1>Vote Wisely. Vote Securely. Vote Virtually.</h1>
                    </div>
                    <div class="desc_about">
                        <pre>The E-Voting System is a web-based system software that allows university students to securely conduct online elections. The E-Voting System is a high-quality online voting system that has the overall requirements of a university election. The system is run by HTML, CSS, JavaScript, and PHP, and was developed by BSIT - 3D NS students from Technological University of the Philippines - Manila. </pre>
                        <pre>Online voting system helps individual to make important decisions on electing people in an organization, by gathering the inputted data of group of people in a systematic and verifiable approach. </pre>
                        <pre>E-Voting System can be use to:
•	Conduct secured online university election.
•	Vote and elect leaders in a university organization. 
•	Engage in a leadership fora and discussion.
</pre>
                    </div>
                    <div class="shape"></div>
                    <div class="shape2"></div>
                    <img class="desc_img" src="vendor/img/election_illus.png" alt="" srcset="">
                </div>
            </div>

            <?php require_once("views/templates/footer.php"); ?>

        </div>
        <?php require_once("views/evs/modal/cpmModal.php"); ?>
        <?php require_once("views/evs/modal/modal_load.php"); ?>
        <?php require_once("views/evs/modal/RegisterModal.php"); ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="vendor/js/app.js"></script>
    <script src="vendor/js/passData.js"></script>
</body>
</html>
    