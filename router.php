<?php
    $routes = require 'routes.php';

    $url = $_SERVER['REQUEST_URI'];

    function routeToController($url, $routes) {
        // print_r($url);
        if(array_key_exists($url, $routes)){
            require $routes[$url];
        } else {
            abort();
        };
    }

    function abort(){
        require 'views/404.php';
        die();
    }

    routeToController($url, $routes);
?>