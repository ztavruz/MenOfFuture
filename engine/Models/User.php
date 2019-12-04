<?php

namespace Engine\Models;

use \RedBeanPHP\R as R;
use Api\Database\Connect;



class User
{
    public function __construct()
    {
        Connect::connect();
    }

    public function create()
    {
        $users = R::dispense('users');
        $users->login = $data['login'];
        $users->email = $data['email'];
        $users->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($users);
    }

    public function getAll()
    {
        

    }
}