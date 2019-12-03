<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use Game\Galaxi\Albion\Albion;
use Game\Galaxi\Sistems\A1_Sistem\A1_Sistem;
use Game\Galaxi\Sistems\Planets\Avalon\Avalon;
use Game\Galaxi\Sistems\Planets\Sectors\Sector01\Sector01;
use Game\Galaxi\Sistems\Planets\Sectors\Tiles\Terra\Terra;

$sistem = new A1_Sistem();
$planet = new Avalon();
$sector = new Sector01();

// var_dump($sistem->listPlanetsName());
var_dump($planet->listSectorsName());
// var_dump($sector->getArrayData());

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Планета: <?= $avalon->getName() ?> </title>
</head>
<body>
    <div class="view_map">
        <div class="sector_mini"></div>
    </div>
   <div class="view_sector">
   </div>
   <div class="view_navigation"></div>
</body>
</html> -->