<?php
    if(isset($_SESSION['userAdmin'])){
        header("Location: /admin/dashboard");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/css/admin_style/header.css" />
    <link rel="stylesheet" href="vendor/css/admin_style/adminAuth.css" />
    <link rel="stylesheet" href="vendor/css/modal.css" />
    <link rel="stylesheet" href="vendor/css/root.css" />
    <link rel="stylesheet" href="vendor/css/footer.css" />
    <link rel="shortcut icon" href="vendor/img/logo/evs_logo_blue.png" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>ADMIN | EVS</title>
</head>
    <body>
        <div id="root">
            <?php require_once("views/templates/admin_header.php"); ?>
            <div class="layout_wrapper">
                <div class="content_wrapper">
                    <div class="login_wrapper">
                        <div class="login_card">
                            <div class="login_logo">
                                <img src="vendor/img/logo/evs_logo_blue.png" alt="" >
                            </div>
                            <form method="post" id="login">
                                <div class="login_input_form">
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
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php   require_once("views/evs/modal/modal_load.php"); ?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="vendor/js/admin_login.js"></script>
    </body>
</html>
