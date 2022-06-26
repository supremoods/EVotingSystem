<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/evs/auth.php');

get('/registration/$privillage', 'views/evs/account/registration.php');

get('/facilitator', 'views/evs/facilitator/auth.php');

get('/facilitator/$page', 'views/evs/facilitator/index.php');

get('/logout', 'controller/LogoutController.php');

get('/forum', 'views/evs/forum.php');

post('/populate', 'controller/populateUniversity.php');

post('/register', 'controller/RegisterController.php');

post('/login', 'controller/LoginController.php');

#---------------------- registration routing --------------------#

post('/form1','controller/registrationController/form1Controller.php');

post('/form2','controller/registrationController/form2Controller.php');

post('/form3','controller/registrationController/form3Controller.php');

#---------------------- admin routing --------------------#
get('/admin', 'views/evs/admin/auth.php');

get('/admin/$page', 'views/evs/admin/index.php');

post('/adminlogin', 'controller/adminController/AdminLoginController.php');

post('/logout', 'controller/adminController/LogoutController.php');

post('/adminController', 'controller/adminController/AdminController.php');

post('/addAdmin', 'controller/adminController/addAdmin.php');

post('/editAdmin', 'controller/adminController/editAdmin.php');

post('/uploadAvatar', 'controller/adminController/uploadAvatar.php');

route('/loadUFR', 'controller/adminController/loadElement/loadUniversityItemFaciRequest.php');

route('/loadUF', 'controller/adminController/loadElement/loadUniversityItemFaci.php');

route('/loadAdminInfo', 'controller/adminController/loadElement/loadAdmin.php');

route('/loadFacilitatorProfile', 'controller/adminController/loadElement/loadFacilitatorProfile.php');

route('/loadFacilitatorList', 'controller/adminController/loadElement/loadFacilitator.php');

route('/loadUserList', 'controller/adminController/loadElement/loadUserList.php');

route('/loadFacilitatorListRequest', 'controller/adminController/loadElement/loadFacilitatorRequest.php');

route('/loadAdminList', 'controller/adminController/loadElement/loadAdminList.php');

route('/deleteAdmin', 'controller/adminController/loadElement/deleteAdmin.php');

route('/loadUserNameSidebar', 'controller/adminController/loadElement/loadUserNameSidebar.php');

route('/preloader', 'controller/adminController/loadElement/preloader.php');

route('/loadUserNameNavbar', 'controller/adminController/loadElement/loadUserNameNavbar.php');


// #---------------------- end --------------------#

// #---------------------- email routing --------------------#

post('/adminMailer', 'controller/EmailController/AdminMailerController.php');

post('/z', 'controller/EmailController/FacilitatorMailerController.php');
// #---------------------- end --------------------#

// #---------------------- facilitator routing --------------------#
route('/loadUSR', 'controller/facilitator/loadElement/loadUniversityItemStudentRequest.php');

route('/loadUS', 'controller/facilitator/loadElement/loadUniversityItemStudent.php');

route('/loadStudentProfile', 'controller/facilitator/loadElement/loadStudentProfile.php');

route('/loadStudentList', 'controller/facilitator/loadElement/loadStudentList.php');

route('/loadStudentListRequest', 'controller/facilitator/loadElement/loadStudentListRequest.php');

post('/facilitatorLogin', 'controller/facilitator/LoginController.php');

get('/facilitatorLogout', 'controller/facilitator/LogoutController.php');


// #---------------------- end --------------------#


// The 404.php has access to $_GET and $_POST
any('/404','views/evs/404.php');
//    echo "<script>window.location.href='views/evs/auth.php'</script>";
    
?>
