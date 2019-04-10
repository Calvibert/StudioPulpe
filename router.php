<?php
function dispatch($route) 
{
    switch(true) {
        case (strcmp($route, "/") === 0):
            return 'home.php';
        case preg_match('/\/projects\/[1-9]+/', $route):
            $num = explode('/', $route)[2];
            return "projet{$num}.php";
        case (strcmp($route, "/a-propos") === 0):
        var_dump($route);
            return 'a_propos.php';
        case (strcmp($route, "/contact") === 0):
            return 'contact.php';
        default:
            return '404.php';
    }
}
