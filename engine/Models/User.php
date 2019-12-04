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

    public function create($data)
    {
        // var_dump( $data);
        if($data['password1'] == $data['password2']){
            $users = R::dispense('users');
            $users->login = $data['login'];
            $users->email = $data['email'];
            $users->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($users);

        }

    }

    public function getAll()
    {
        

    }

    public function getUser($data)
    {
        $bind = 
        [
            'login' => $data['login']
        ];
        $user = R::getAll("SELECT * FROM users WHERE login = :login LIMIT 1", $bind);

        return $user;
    }
}