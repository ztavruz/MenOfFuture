<?php

namespace Game\Galaxi\Sistems\Planets\Sectors\Tiles;

class AllTiles
{   
    public static function getTiles()
    {
        return [
            '1' => Terra\Terra::class,
            '2' => Grass\Grass::class,
            '3' => Water\Water::class
        ];
    }
}