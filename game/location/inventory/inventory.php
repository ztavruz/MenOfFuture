<?php

require_once __DIR__ . "/../../../vendor/autoload.php";
$classes = require_once __DIR__ . "/../../../engine/Config/classes.php";
use Game\Predmets\DIpredmets;

$di = new DIpredmets();
foreach ($classes as $key => $value) {
    $di->set($key, $value);
}

// print_r($di->container);
use Game\Personaj\Personaj;



$personaj = new Personaj('ZTAVRUZ', "Стратег");
$personaj->equipHead($di->get('Кепка'));
$personaj->equipBody($di->get('Панцирь'));
$personaj->equipRightHand($di->get('Ak47'));
$personaj->equipLegs($di->get('Найк'));
$personaj->updateParams();

// $personaj->viewParameters();

use Game\Galaxi\Sistems\Planets\Sectors\Sector01\Sector01;
use Game\Galaxi\Sistems\Planets\Avalon\Avalon;

$sector = new Sector01();
$planet = new Avalon();
// print_r($sector->addTiles_test());
// print_r($planet->sectors_test());
print_r($planet->getName());


// print_r($sector);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Планета: <?=$planet->getName() ?></title>
    <img src="" alt="">
</head>

    

<body>
    
</body>
</html>