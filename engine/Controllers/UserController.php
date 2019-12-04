<?php

namespace Engine\Controllers;
use Engine\Controllers\Controller;
use Engine\Models\User;

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
        $this->model->create();
        $this->view->render();
    }
}