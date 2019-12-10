<?php

namespace Game\Galaxi\Sistems\Planets\Sectors\Sector01;
use Game\Galaxi\Sistems\Planets\Sectors\Sector;

// use Game\Galaxi\Sistems\Planets\Sectors\Tiles\Terra\Terra;
// use Game\Galaxi\Sistems\Planets\Sectors\Tiles\Water\Water;
// use Game\Galaxi\Sistems\Planets\Sectors\Tiles\Grass\Grass;

class Sector01 extends Sector
{
    // protected $name;
    // protected $color_test;
    // protected $arrayTiles =[];
    // protected $position;
    // protected $listAllTiles;
    
    public function __construct()
    {
        $this->name = "Сектор-01";
        $this->color_test = "#80787E";
        $this->arrayTiles = 
        [
            [1,1,1,1,1,1,1,1,1,1],
            [1,1,1,2,2,2,2,1,1,1],
            [1,1,1,2,3,3,2,1,1,1],
            [1,1,1,2,2,2,2,1,1,1],
            [1,1,1,1,1,1,1,1,1,1]
        ];

        parent::__construct();
        $this->setArrayData();
    }
    
}