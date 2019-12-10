<?php

namespace Game\Personaj\Inventory\SoldierInventory;
use Game\Personaj\Inventory\Inventory;

class SoldierInventory extends Inventory
{
    protected $totalCapacity;
    protected $curentCapacity;

    public function __construct()
    {
        $this->totalCapacity = 20;
        $this->currentCapacity = $this->curentlCapacity();
    }

    public function curentlCapacity()
    {
        $result = 0;

        foreach ($this->container as $item) {
            
            $result++;
        }

        return $result;
    }

    
}