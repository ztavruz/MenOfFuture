<?php
ini_set('display_errors','On');
error_reporting('E_ALL');

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/engine/Config/const.php";
$routes = require_once __DIR__ . "/engine/Config/routes.php";

use Engine\Router\Router;
use Api\ApiLoader;

        // $http = $_SERVER["HTTP_X_FORWARDED_PROTO"]; 
        // $host = $_SERVER["HTTP_HOST"];
        // $patch = $http . "://" .  $host . "/";
        // var_dump($patch);


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






