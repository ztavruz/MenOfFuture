<?php

namespace Engine\Controllers;
use Engine\Controllers\Controller;

class GuestController extends Controller
{
    public function __construct($model){
        parent::__construct($model);
    }

    public function indexAction()
    {
        // $this->model->some();
        // // echo 123;
        // // var_dump($this->model);

        $this->view->render();
    }
}