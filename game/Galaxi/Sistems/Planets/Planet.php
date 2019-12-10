<?php

namespace Game\Galaxi\Sistems\Planets;
use Game\Galaxi\Sistems\Planets\Sectors\AllSectors;

class Planet
{
    protected $name;
    protected $description;
    protected $arraySectors = [];
    protected $arrayData = [];
    protected $position;

    public function __construct()
    {
        $this->setArraySectors();
    }

    protected function setArraySectors()
    {   
        $map = $this->arraySectors;
        $listAllSectors = AllSectors::getSectors();
       for ($i = 0; $i < count($map); $i++ ){
           
           for ($j = 0; $j < count($map[$i]); $j++) {

               foreach ($listAllSectors as $key => $item) {
                    if ($map[$i][$j] == $key) {
                        $sector = new $item();
                        $data = $sector->getArrayData();
                        $this->arraySectors[$i][$j] = $data;
                    }
               }
           }
        }
    }

    public function listSectorsName()
    {
        $result = [];
        foreach ($this->arrayData['arraySectors'] as $key => $item) {
            foreach ($item as $id => $name) {
                $result[] = $name['name'];
            }
        }
        return $result;
    }

    protected function setArrayData()
    {
        $this->arrayData['name'] = $this->name;
        $this->arrayData['description'] = $this->description;
        $this->arrayData['arraySectors'] = $this->arraySectors;
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