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

get('/facilitator', 'views/evs/facilitator/index.php');

get('/logout', 'controller/LogoutController.php');

get('/forum', 'views/evs/forum.php');

post('/populate', 'controller/populateUniversity.php');

post('/register', 'controller/RegisterController.php');

post('/login', 'controller/LoginController.php');

post('/adminlogin', 'controller/AdminLoginController.php');

post('/adminController', 'controller/AdminController.php');

// The 404.php has access to $_GET and $_POST
any('/404','views/evs/404.php');