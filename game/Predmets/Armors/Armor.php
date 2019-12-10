<?php

namespace Game\Predmets\Armors;
use Game\Predmets\Predmet;

class Armor extends Predmet
{
    protected $name;
    protected $armor;

    // protected $description;

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
}