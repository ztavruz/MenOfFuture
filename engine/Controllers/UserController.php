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
        
    }
    public function guestAction()
    {
        $this->view->render();
    }
    
    public function registerAction()
    {
        $this->render();
    }
    public function createAction()
    {

        $data = $_POST;
        $this->model->create($data);

        $result = $this->model->getUser($data);
        // var_dump($result);
        $this->render($result);

    }
    public function mainAction()
    {
        $this->render();
    }






    public function render($data = null)
    {
        $this->view->render($data);
    }

}