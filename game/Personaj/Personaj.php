<?php

namespace Game\Personaj;
use Game\Units\Unit;
use Game\Personaj\Inventory\SoldierInventory\SoldierInventory;

class Personaj extends Unit
{
    private $head;
    private $body;
    private $leftHand;
    private $rightHand;
    private $legs;
    private $inventory;

    // private $lvl;
    // private $classUnit;
    // private $name; 
    // private $health; 
    // private $armor; 
    // private $weapon;
    

    public function __construct($name, $classUnit)
    {
        $this->lvl = 17;
        $this->classUnit = $classUnit;
        $this->name      = $name;
        $this->health    = 1000;
        $this->armor     = 100;
        $this->damage    =  100;
        $this->inventory = new SoldierInventory();

    }

    public function equipHead($classHead)
    {
        $this->head = $classHead;
    }

    public function equipBody($classHead)
    {
        $this->body = $classHead;
    }

    public function equipLeftHand($classHead)
    {
        $this->leftHand = $classHead;
    }

    public function equipRightHand($classHead)
    {
        $this->rightHand = $classHead;
    }

    public function equipLegs($classHead)
    {
        $this->legs = $classHead;
    }

    public function updateParams()
    {
        $this->armor = $this->currentArmor();
        $this->health = $this->currentHealth();
    }
    /////////////////
    public function currentArmor()
    {
        $total = 
        $this->head+
        $this->head->getArmor() + 
        $this->body->getArmor() +
        $this->legs->getArmor();

        return $total * $this->lvl;
    }

    public function currentHealth()
    {
        $total = 
        $this->health;

        return $total * $this->lvl;
    }

    public function currentDamage()
    {
        $total = 
        $this->damage;

        return $total * $this->lvl;
    }


    

    public function viewParameters()
    {
        echo "Уровень: ";
        print_r($this->lvl);
        echo "<br>";
        
        echo "Имя: ";
        print_r($this->name);
        echo "<br>";

        echo "Класс: ";
        print_r($this->classUnit);
        echo "<br>";

        echo "Здоровье: ";
        print_r($this->health);
        echo "<br>";

        echo "Броня: ";
        print_r($this->armor);
        echo "<br>";

        echo "Сумка: ";
        print_r($this->inventory);
        echo "<br>";
/////////////////////

        echo "Голова: ";
        print_r($this->head);
        echo "<br>";

        echo "Тело: ";
        print_r($this->body);
        echo "<br>";

        echo "Левая рука: ";
        print_r($this->leftHand);
        echo "<br>";

        echo "Правая рука: ";
        print_r($this->rightHand);
        echo "<br>";

        echo "Ноги: ";
        print_r($this->legs);
        echo "<br>";
    }

    /**
     * Get the value of head
     */ 
    public function getHead()
    {
        return $this->head;
    }

    /**
     * Set the value of head
     *
     * @return  self
     */ 
    public function setHead($head)
    {
        $this->head = $head;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of leftHand
     */ 
    public function getLeftHand()
    {
        return $this->leftHand;
    }

    /**
     * Set the value of leftHand
     *
     * @return  self
     */ 
    public function setLeftHand($leftHand)
    {
        $this->leftHand = $leftHand;

        return $this;
    }

    /**
     * Get the value of rightHand
     */ 
    public function getRightHand()
    {
        return $this->rightHand;
    }

    /**
     * Set the value of rightHand
     *
     * @return  self
     */ 
    public function setRightHand($rightHand)
    {
        $this->rightHand = $rightHand;

        return $this;
    }

    /**
     * Get the value of legs
     */ 
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * Set the value of legs
     *
     * @return  self
     */ 
    public function setLegs($legs)
    {
        $this->legs = $legs;

        return $this;
    }
}
