<?php

namespace Engine\Controllers;
use Engine\View\View;

abstract class Controller
{

    protected $model;
    public $view;

    public function __construct($params)
    {
        $namespace = "Engine\\Models\\" . $params['controller'];
        $this->model = new $namespace();
        
        $this->view = new View($params['controller'], $params['method']);   
    }
    
}