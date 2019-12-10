<?php

namespace Game\Galaxi\Sistems\Planets\Sectors\Tiles\Grass;
use Game\Galaxi\Sistems\Planets\Sectors\Tiles\Tile;

class Grass extends Tile
{
    // protected $name;
    // protected $size = 10;
    // protected $color_test;
    // protected $src;
    // protected $arrayData = [];

    public function __construct()
    {
        $this->name = "Трава";
        $this->src = 'grass.png';
        $this->color_test = "#10800A";

        parent::__construct();
    }
}