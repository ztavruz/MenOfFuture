<?php

namespace Game\Predmets\Boepripas;
use Game\Predmets\Predmet;

class Boepripas extends Predmet
{
    protected $name;
    protected $caliber;
    protected $damage;
    protected $charge;
    
    // protected $strength;    //прочность
    // protected $weight;      //вес 
    // protected $volume;      //обьём
    // protected $composition; //состав
    // protected $ammunition;

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