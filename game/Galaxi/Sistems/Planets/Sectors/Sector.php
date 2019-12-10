<?php

namespace Game\Galaxi\Sistems\Planets\Sectors;
use Game\Galaxi\Sistems\Planets\Sectors\Tiles\AllTiles;

class Sector
{
    protected $name;
    protected $description;
    protected $arrayTiles = [];
    protected $arrayData = [];
    protected $position;

    public function __construct()
    {
        $this->setArrayTiles();
    }
     
    private function setArrayTiles()
    {   
        $map = $this->arrayTiles;
        $listAllTiles = AllTiles::getTiles();
        for ($i = 0; $i < count($map); $i++ ){

            for ($j = 0; $j < count($map[$i]); $j++) {

                foreach ($listAllTiles as $key => $item) {
                    if ($map[$i][$j] == $key) {
                        $tile = new $item();
                        $data = $tile->getArrayData();
                        $this->arrayTiles[$i][$j] = $data;
                    }
                }

            }
        }
    }

    protected function setArrayData()
    {
        $this->arrayData['name'] = $this->name;
        $this->arrayData['description'] = $this->description;
        $this->arrayData['arrayTiles'] = $this->arrayTiles;
        $this->arrayData['position'] = $this->position;
    }

    public function getArrayData($typeReturn = 'array')
    {
        if ($typeReturn == 'json'){
            return json_encode($this->arrayData);
        }

        return $this->arrayData;
    }
}