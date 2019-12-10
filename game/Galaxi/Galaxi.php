<?php

namespace Game\Galaxi;

class Galaxi
{

    protected $name;
    protected $description;
    protected $position;
    protected $arraySistems = [];
    protected $arrayData = [];
    
    public function __construct()
    {
        $this->setArraySistems();
        $this->setArrayData();
    }

    protected function setArraySistems()
    {   
        $listAllSistems = require_once __DIR__ . "/Sistems/allSistems.php";
        $map = $this->arraySistems;

       for ($i = 0; $i < count($map); $i++ ){
           for ($j = 0; $j < count($map[$i]); $j++) {
               foreach ($listAllSistems as $sistemID => $item) {
                    if ($map[$i][$j] == $sistemID) {
                        $sistem = new $item();
                        $sistemData = $sistem->getArrayData();
                        $this->arraySistems[$i][$j] = $sistemData;
                    }
               }
           }
        }
        
        return $this->arraySectors;
    }

    public function setArrayData()
    {
        $this->arrayData['name'] = $this->name;
        $this->arrayData['description'] = $this->description;
        $this->arrayData['position'] = $this->position;
        $this->arrayData['arraySistems'] = $this->arraySistems;
    }

    public function getArrayData($typeReturn = 'array')
    {
        if ($typeReturn == 'json'){
            return json_encode($this->arrayData);
        }

        return $this->arrayData;
    }
}