<?php

namespace Game\Predmets\Boepripas;
use Game\Predmets\Boepripas\Boepripas;

class Patron_1 extends Boepripas
{
    protected $name;
    protected $caliber;
    protected $damage;
    protected $charge; //взрывной заряд в граммах
    
    // protected $strength;    //прочность
    // protected $weight;      //вес пули в граммах
    // protected $volume;      //обьём
    // protected $composition; //состав
    // protected $ammunition;

    public function __construct()
    {   
        $this->name    = 'стандартный пистолетный патрон';
        $this->caliber = 1;
        $this->charge = 1;
        $this->weight = 10;
        $this->damage = $this->caliber * $this->weight;
    }

    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of caliber
     */ 
    public function getCaliber()
    {
        return $this->caliber;
    }

    /**
     * Set the value of caliber
     *
     * @return  self
     */ 
    public function setCaliber($caliber)
    {
        $this->caliber = $caliber;

        return $this;
    }

    /**
     * Get the value of damage
     */ 
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */ 
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get the value of charge
     */ 
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set the value of charge
     *
     * @return  self
     */ 
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }
}