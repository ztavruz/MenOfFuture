<?php

namespace Game\Personaj\Inventory;

class Inventory
{
    protected $totalCapacity;
    protected $curentCapacity;
    protected $container = [];

    public function setItem($nameItem, $classItem)
    {
        if ($this->currentCapacity < $this->totalCapacity) {
            $this->container[$nameItem] = $classItem;
            $this->totalCapacity++;
        }
    }

    public function getItem($nameItem)
    {
        if (isset($this->container[$nameItem])) {
            return $this->container[$nameItem];
        }

        echo 'вещь не найдена';
    }
    
    public function deleteItem($nameItem)
    {
        if (isset($this->container[$nameItem])) {
            $this->container[$nameItem] = null;
        }
    }

    public function viewItems()
    {
        
    }
}