<?php

namespace Game\Galaxi\Sistems;

class AllSistems
{
    public static function getAllSistems()
    {
        return 
        [
            '1' => A1_Sistem\A1_Sistem::class,
        ];  
    }
}