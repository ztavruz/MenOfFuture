<?php

namespace Game\Predmets\Weapons\Guns;
use Game\Predmets\Weapons\Weapon;

class Makarov extends Weapon
{
    // protected $name;
    // protected $caliber;
    // protected $damage;
    // protected $lengthBarrel; //mm
    // protected $tojnost;
    // protected $boepripas;

    // protected $strength;    //прочность
    // protected $weight;      //вес 
    // protected $volume;      //обьём
    // protected $composition; //состав
    // protected $boepripas;

    public function __construct()
    {
        $this->name = 'Макаров';
        $this->caliber = 1;
        $this->lengthBarrel = 100; 
        $this->tojnost = 30;
    }
}