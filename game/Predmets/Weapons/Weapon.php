<?php

namespace Game\Predmets\Weapons;
use Game\Predmets\Predmet;

class Weapon extends Predmet
{
    protected $name;
    protected $caliber;
    protected $damage;
    protected $lengthBarrel; //mm
    protected $tojnost;
    protected $boepripas;

    // protected $strength;    //прочность
    // protected $weight;      //вес 
    // protected $volume;      //обьём
    // protected $composition; //состав

    public function recharge() //перезарядка
    {

    }

    public function shot() //выстрел
    {
        
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
     * Get the value of lengthBarrel
     */ 
    public function getLengthBarrel()
    {
        return $this->lengthBarrel;
    }

    /**
     * Set the value of lengthBarrel
     *
     * @return  self
     */ 
    public function setLengthBarrel($lengthBarrel)
    {
        $this->lengthBarrel = $lengthBarrel;

        return $this;
    }

    /**
     * Get the value of tojnost
     */ 
    public function getTojnost()
    {
        return $this->tojnost;
    }

    /**
     * Set the value of tojnost
     *
     * @return  self
     */ 
    public function setTojnost($tojnost)
    {
        $this->tojnost = $tojnost;

        return $this;
    }

    /**
     * Get the value of boepripas
     */ 
    public function getBoepripas()
    {
        return $this->boepripas;
    }

    /**
     * Set the value of boepripas
     *
     * @return  self
     */ 
    public function setBoepripas($boepripas)
    {
        $this->boepripas = $boepripas;

        return $this;
    }
}