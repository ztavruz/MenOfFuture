<?php

namespace Api\Controllers;
use \RedBeanPHP\R as R;


class User extends Connect
{
    public function getAll()
    {
        $users = R::getAll("SELECT * FROM users");

        $users = json_encode($users);
        var_dump($users);
    }
}