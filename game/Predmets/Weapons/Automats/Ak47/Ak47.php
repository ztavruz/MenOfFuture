<?php

namespace Game\Predmets\Weapons\Automats\Ak47;
use Game\Predmets\Weapons\Weapon;

use Game\Predmets\Boepripas\Ak47\Patron_1;

class Ak47 extends Weapon
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
        $this->name = 'АК-47';
        $this->caliber = 5;
        $this->lengthBarrel = 350;
        $this->tojnost = 50;
        // $this->boepripas;
    }

    public function recharge() //перезарядка
    {
        $this->boepripas = $boepripas;
    }

    public function shot() //выстрел
    {
        $this->damage = $this->caliber * $this->boepripas->getDamage();

        return $this->damage;
    }

}