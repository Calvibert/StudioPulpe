<?php
require 'router.php';

$route = $_SERVER['REQUEST_URI'];

$file = dispatch($route);

require $file;