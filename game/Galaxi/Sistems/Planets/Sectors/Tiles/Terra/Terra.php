<?php

namespace Game\Galaxi\Sistems\Planets\Sectors\Tiles\Terra;
use Game\Galaxi\Sistems\Planets\Sectors\Tiles\Tile;

class Terra extends Tile
{
    // protected $name;
    // protected $size = 10;
    // protected $src;
    // protected $position;
    // protected $arrayData = [];
    
    public function __construct()
    {
        $this->name = "Земля";
        $this->src = 'terra.png';
        $this->color_test = "#A75502";

        parent::__construct();
    }
  


    public function getArrayData($typeReturn = 'array')
    {
       
        if ($typeReturn == 'json'){
            return json_encode($this->arrayData);
        }

        return $this->arrayData;
    }
}