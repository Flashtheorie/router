<?php

$request = $_SERVER['REQUEST_URI'];



switch ($request) {
    case '/Projetsactuels/router/home' :
        require 'views/home.php';
        break;
    case '/Projetsactuels/router/' :
        require 'views/home.php';
        break;
    case '/Projetsactuels/router/about' :
        require 'views/about.php';
        break;
    case '/Projetsactuels/router/login' :
        require 'views/login.php';
        break;
    default:
        http_response_code(404);
        require 'views/404.php';
        break;
}

