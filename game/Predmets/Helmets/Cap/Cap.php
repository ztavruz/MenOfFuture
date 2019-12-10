<?php

namespace Game\Predmets\Helmets\Cap;
use Game\Predmets\Armors\Armor;

class Cap extends Armor
{
    public function __construct()
    {
        $this->name = 'Абибас';
        $this->armor = 10;
        $this->description = 
        "Обычная гражданская кепка. Надеюсь из названия 
        вам понятно что её изготовлением занимались любители риса,
        защитные качества соответствующие. Ну да ладно, не всё так плохо,
        по крайней мере солнце голову не печёт!;)";
    }
}