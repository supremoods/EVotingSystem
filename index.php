<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/evs/auth.php');

get('/admin', 'views/evs/admin/auth.php');

get('/admin/$page', 'views/evs/admin/index.php');

get('/facilitator', 'views/evs/facilitator/auth.php');

get('/facilitator/$page', 'views/evs/facilitator/index.php');

get('/logout', 'controller/LogoutController.php');

get('/forum', 'views/evs/forum.php');

post('/populate', 'controller/populateUniversity.php');

post('/register', 'controller/RegisterController.php');

post('/login', 'controller/LoginController.php');


#---------------------- admin routing --------------------#

post('/adminlogin', 'controller/adminController/AdminLoginController.php');

post('/adminController', 'controller/adminController/AdminController.php');

post('/addAdmin', 'controller/adminController/addAdmin.php');

post('/editAdmin', 'controller/adminController/editAdmin.php');

route('/loadAdminInfo', 'controller/adminController/loadAdmin.php');

route('/loadAdminList', 'controller/adminController/loadAdminList.php');

route('/deleteAdmin', 'controller/adminController/deleteAdmin.php');

// #---------------------- end --------------------#

// #---------------------- facilitator routing --------------------#

post('/facilitatorLogin', 'controller/facilitator/LoginController.php');







// #---------------------- end --------------------#


// The 404.php has access to $_GET and $_POST
any('/404','views/evs/404.php');
//    echo "<script>window.location.href='views/evs/auth.php'</script>";
    
?>
