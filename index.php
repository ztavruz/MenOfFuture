<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/engine/Config/const.php";
$routes = require_once __DIR__ . "/engine/Config/routes.php";

use Engine\Router\Router;
use Api\ApiLoader;



$url = trim($_SERVER['REQUEST_URI'], "/");
session_start();    

if (preg_match("#^api.*#", $url)) {
    $api = new ApiLoader($url);
    $api->run();

}else
{
    $router = new Router($routes);
    $router->run();
}





