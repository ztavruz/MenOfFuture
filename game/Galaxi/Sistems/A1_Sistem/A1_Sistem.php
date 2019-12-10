<?php

namespace Game\Galaxi\Sistems\A1_Sistem;
use Game\Galaxi\Sistems\Sistem;

class A1_Sistem extends Sistem
{
    // protected $name;
    // protected $description;
    // protected $position;
    // protected $arrayPlanets = [];
    // protected $arrayData = [];

    public function __construct()
    {
        $this->name = "A-01";
        $this->description = "Система карликовой красной звезды.";
        $this->color_test = "#80787E";
        $this->arrayPlanets = 
        [
            [1,1,1],
            [1,1,1],
            [1,1,1]
        ];

        parent::__construct();
    }

}