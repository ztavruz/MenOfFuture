<?php

namespace Game\Galaxi\Sistems\Planets\Avalon;
use Game\Galaxi\Sistems\Planets\Planet;
// use Game\Galaxi\Sistems\Planets\Sectors\Sector01\Sector01;

class Avalon extends Planet
{
    // protected $name;
    // protected $description;
    // protected $arraySectors = [];
    // protected $position;
    
    public function __construct()
    {
        $this->name = "Авалон";
        $this->color_test = "#80787E";
        $this->arraySectors =
        [
            [1,1,1],
            [1,1,1],
            [1,1,1]
        ];
        
        parent::__construct();
        $this->setArrayData();
    }
}