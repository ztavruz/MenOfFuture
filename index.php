<?php
// ini_set('display_errors','On');
// error_reporting('E_ALL');

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/engine/Config/const.php";
$routes = require_once __DIR__ . "/engine/Config/routes.php";

use Engine\Token\Token;
use Engine\Router\Router;
use Api\ApiLoader;
use \RedBeanPHP\R as R;

        // $http = $_SERVER["HTTP_X_FORWARDED_PROTO"]; 
        // $host = $_SERVER["HTTP_HOST"];
        // $patch = $http . "://" .  $host . "/";
        // var_dump($patch);


$url = trim($_SERVER['REQUEST_URI'], "/");

//  var_dump($url);

if (preg_match("#^api.*#", $url)) {

//     $isToken = true;
//     if($url != "api/user/signup"){
//         $token     = json_decode($this->data['user']['token'], true);
//         $isToken = $this->token->validateToken($token);
// //     }else{
//         if($isToken){
            $api = new ApiLoader($url);
            $api->run();
    //     }
    // }

    // echo "Ошибка в токене";  

}else
{
    $router = new Router($routes);
    $router->run();
}