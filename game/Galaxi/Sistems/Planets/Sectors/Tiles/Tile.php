<?php

namespace Game\Galaxi\Sistems\Planets\Sectors\Tiles;

class Tile
{

    protected $name;
    protected $size = 10;
    protected $src;
    protected $color_test;

    protected $arrayData = [];
    protected $position;
    
    public function __construct()
    {
        $this->setArrayData();
    }

    protected function setArrayData()
    {
        $this->arrayData['name'] = $this->name;
        $this->arrayData['size'] = $this->size;
        $this->arrayData['src'] = $this->src;
        $this->arrayData['color_test'] = $this->color_test;
    }

    public function getArrayData($typeReturn = 'array')
    {
       
        if ($typeReturn == 'json'){
            return json_encode($this->arrayData);
        }

        return $this->arrayData;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}