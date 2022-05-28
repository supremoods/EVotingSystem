<?php

require_once "config/route.php";

route('evs/', function () {
    include_once 'views/evs/auth.php';
});

route('evs/forum', function () {
    include_once 'views/evs/forum.php';
});

//route for 404s
route('404', function () {
    include_once 'views/evs/404.php';
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);




