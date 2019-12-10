<?php

namespace Game\Predmets\Armors\Panzer1;
use Game\Predmets\Armors\Armor;

class Panzer1 extends Armor
{
    public function __construct()
    {
        $this->name = 'Панцирь 1';
        $this->armor = 100;
        $this->description = "Старый хлам с заброшенных армейских складов. Достаточная защита от комаров, но не более!";
    }
}