<?php

namespace Game\Galaxi\Sistems\Planets\Sectors;

class AllSectors
{   
    public static function getSectors()
    {
        return [
            1 => Sector01\Sector01::class,
            2 => Sector02\Sector02::class,
            3 => Sector03\Sector03::class,
            4 => Sector04\Sector04::class,
            5 => Sector05\Sector05::class,
            6 => Sector06\Sector06::class,
            7 => Sector07\Sector07::class,
            8 => Sector08\Sector08::class,
            9 => Sector09\Sector09::class
        ];
    }
}