<?php

$request = $_SERVER['REQUEST_URI'];



switch ($request) {
    case '/Projetsactuels/router/home' :
        include 'views/home.php';
        break;
    case '/Projetsactuels/router/' :
        include 'views/home.php';
        break;
    case '/Projetsactuels/router/about' :
        include 'views/about.php';
        break;
    case '/Projetsactuels/router/login' :
        include 'views/login.php';
        break;
    default:
        http_response_code(404);
        include 'views/404.php';
        break;
}

