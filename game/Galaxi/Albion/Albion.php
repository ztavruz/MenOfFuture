<?php

namespace Game\Galaxi\Albion;
use Game\Galaxi\Galaxi;

class Albion extends Galaxi
{
    // protected $name;
    // protected $description;
    // protected $position;
    // protected $arraySistems = [];
    // protected $arrayData = [];

    public function __construct()
    {
        $this->name = "Альбион";
        $this->description = "Центральная галактика, по слухам прародина предтеч.";
        $this->color_test = "#80787E";
        $this->arraySistems = 
        [
            [1,1,1],
            [1,1,1],
            [1,1,1]
        ];

        parent::__construct(); 
    }
}