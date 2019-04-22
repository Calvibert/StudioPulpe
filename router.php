<?php
function dispatch($route) 
{
    switch(true) {
        case (strcmp($route, "/") === 0):
            return 'home.php';
        case preg_match('/\/projet\/[1-9]+/', $route):
            $num = explode('/', $route)[2];
            return "projet{$num}.php";
        case (strcmp($route, "/a-propos") === 0):
            return 'a_propos.php';
        case (strcmp($route, "/contact") === 0):
            return 'contact.php';
        case (strcmp($route, "/merci") === 0):
            return 'merci.php';
        default:
            return '404.php';
    }
}
