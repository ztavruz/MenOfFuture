<?php

namespace Engine\Controllers;
use Engine\Controllers\Controller;

class UserController extends Controller
{

    public function __construct($model){
        parent::__construct($model);
    }

    public function authorAction()
    {
        $this->view->render();
    }
    public function guestAction()
    {
        $this->view->render();
    }
    public function registerAction()
    {
        $this->view->render();
    }
}