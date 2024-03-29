<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/css/admin_style/header.css"/>
    <link rel="stylesheet" href="../vendor/css/admin_style/style.css"/>
    <link rel="stylesheet" href="../vendor/css/admin_style/sidebar.css"/>
    <link rel="stylesheet" href="../vendor/css/admin_style/dashboard.css"/>
    <link rel="stylesheet" href="../vendor/css/root.css" />
    <title>FACILITATOR | EVS</title>
    <link rel="shortcut icon" href="../vendor/img/logo/evs_logo_blue.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>
<body>
  <div id="root">
      <?php require_once("views/templates/admin_header.php"); ?>
      <div class="layout_wrapper">
        <?php require_once("views/templates/facisidebar.php"); ?>
        <div class="content">
              <div class="dashboard_wrappper">
                <div class="dashboard_header">
                    <div class="dashboard_header_title">
                        <h1>Report</h1>
                    </div>
                </div>

                <div class="dashboard_body">
                    <div class="dashboard_users">
                       <h4>Report</h4>
                    </div>
                </div>
          
            </div>
        </div>
      </div>
      
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../vendor/js/admin.js"></script>
</body>
</html>
