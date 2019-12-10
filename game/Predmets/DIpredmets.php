<?php

namespace Game\Predmets;

class DIpredmets
{
    public $container = [];

    public function set($name, $class){
        $this->container[$name] = $class;
    }

    public function get($name){
        if(isset($this->container[$name])){
            return new $this->container[$name];
        }
    }

}