<?php

namespace Game\Galaxi\Sistems;
use Game\Galaxi\Sistems\Planets\AllPlanets;

class Sistem
{
    protected $name;
    protected $description;
    protected $position;
    protected $arrayPlanets = [];
    protected $arrayData = [];

    public function __construct()
    {
        $this->setArrayPlanets();
        $this->setArrayData();
    }

    public function listPlanetsName()
    {   
        $result = [];
        foreach ($this->arrayData['arrayPlanets'] as $key => $item) {
            foreach ($item as $id => $name) {
                $result[] = $name['name'];
            }
        }
        return $result;
    }

    protected function setArrayPlanets()
    {   
        $map = $this->arrayPlanets;
        $listAllPlanets = AllPlanets::getAllPlanets();

       for ($i = 0; $i < count($map); $i++ ){
           for ($j = 0; $j < count($map[$i]); $j++) {
               foreach ($listAllPlanets as $key => $class) {
                    if ($map[$i][$j] == $key) {
                        $planet = new $class();
                        $planetData = $planet->getArrayData();
                        $this->arrayPlanets[$i][$j] = $planetData;
                    }
               }
           }
        }
    }

    protected function setArrayData()
    {
        $this->arrayData['name'] = $this->name;
        $this->arrayData['description'] = $this->description;
        $this->arrayData['arrayPlanets'] = $this->arrayPlanets;
        $this->arrayData['position'] = $this->position;
    }
    
    public function getArrayData($typeReturn = 'array')
    {
        if ($typeReturn == 'json'){
            return json_encode($this->arrayData);
        }

        return $this->arrayData;
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
}