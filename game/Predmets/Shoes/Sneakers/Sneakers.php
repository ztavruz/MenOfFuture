<?php

namespace Game\Predmets\Shoes\Sneakers;
use Game\Predmets\Armors\Armor;

class Sneakers extends Armor
{
    public function __construct()
    {
        $this->name = 'Найк';
        $this->armor = 10;
        $this->description = "Спортивная обувь, довольно удобно, главное на гвоздь не наступить.";
    }
}