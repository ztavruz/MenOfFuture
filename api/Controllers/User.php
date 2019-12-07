<?php

namespace Api\Controllers;
use \RedBeanPHP\R as R;


class User extends Connect
{
    public function getAll()
    {
        $users = R::getAll("SELECT * FROM users");

        echo json_encode($users);
    }

    public function getOne()
    {
        
        $bind = [ $_GET['id'] ];

        $user = R::getAll("SELECT * FROM users WHERE id LIKE ?", $bind);

        echo json_encode($user);
    }

    public function signup()
    {
        $data = $_POST;

        $users = R::dispense("users");
        $users->login = $data['login'];
        $users->email = $data['email'];
        $users->password = password_hash($data['password'], PASSWORD_DEFAULT);

        R::store($users);
    }

    public function signin(){
        
        $data     = json_decode($_POST['user'], true);
        $login    = $data['login'];
        $password = $data['password'];

        // var_dump($data);
        $bind     = [ $login ];
        $count = R::findOne('users', 'login = ?', $bind);

        // var_dump($data);
        if($count){


            if(password_verify($password, $count['password'])){

                echo json_encode($this->getUser($login)); 
                // echo $user;
                // echo $user = $this->getUser($login);
                // echo "Пароли совпали!";
                exit();

            }else{
                $this->errors = "Не верный пароль, попробуй ещё 100500 раз! :)";
                echo "Пароли не совпали!";
            }

        }else{
            $this->errors = "Нет такого логина в моей базе данных.";
            echo "Логина нет!";
        }

    }

    public function delete()
    {
        
    }

    public function block()
    {
        
    }

    public function getUser($key)
    {
        $bind = [ $key ];

        $user = R::getRow("SELECT * FROM users WHERE login LIKE ?", $bind);

        return $user;
    }
}