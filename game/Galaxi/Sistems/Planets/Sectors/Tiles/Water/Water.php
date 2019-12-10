<?php

namespace Game\Galaxi\Sistems\Planets\Sectors\Tiles\Water;
use Game\Galaxi\Sistems\Planets\Sectors\Tiles\Tile;

class Water extends Tile
{
    // protected $name;
    // protected $size = 10;
    // protected $color_test;
    // protected $src;
    // protected $arrayData = [];

    public function __construct()
    {
        $this->name = "Вода";
        $this->src = 'water.png';
        $this->color_test = "#0048BA";

        parent::__construct();
    }

}