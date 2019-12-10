<?php

namespace Game\Units;

abstract class Unit
{
    private $lvl;
    private $classUnit;
    private $name; 
    private $health; 
    private $armor; 
    private $weapon; 
    private $damage;

    

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
     * Get the value of health
     */ 
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set the value of health
     *
     * @return  self
     */ 
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get the value of armor
     */ 
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set the value of armor
     *
     * @return  self
     */ 
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get the value of weapons
     */ 
    public function getWeapons()
    {
        return $this->weapons;
    }

    /**
     * Set the value of weapons
     *
     * @return  self
     */ 
    public function setWeapons($weapons)
    {
        $this->weapons = $weapons;

        return $this;
    }

    /**
     * Get the value of lvl
     */ 
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set the value of lvl
     *
     * @return  self
     */ 
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }
}