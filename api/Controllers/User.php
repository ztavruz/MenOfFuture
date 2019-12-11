<?php

namespace Api\Controllers;
use \RedBeanPHP\R as R;
use Engine\Token\Token;
use Api\Controllers\Connect;


class User extends Connect
{
    private $data;
    public  $token;
    public  $errors;

    public function __construct(){

        parent::__construct();

        $this->data = $_POST;
        $this->token = new Token();
        $connect = new Connect();
    }

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
        $result = [];
        $data     = json_decode($this->data['user'], true);
        $login    = $data['login'];
        $password = $data['password'];
        $email    = $data['email'];

        $users = R::dispense("users");
        $users->login = $login;
        $users->email = $email;
        $users->password = password_hash($password, PASSWORD_DEFAULT);
        R::store($users);

        $user = $this->getUserByLogin($login);
        $result['user'] = $user;
        $result['token'] = $this->token->createToken($user);
        $result['pageHost'] = $this->patch;

        echo json_encode($result);
    }

    public function author(){
        
        $result = [];
        $validate;

        $token = json_decode($_POST['token'], true);
        $validate = $this->token->validateToken($token);

        if($token != null ){
            
    
            if($validate != false){
                $result['pageHost'] = $this->patch;
                $result['validate'] = $validate;

                echo json_encode($result);
                
            }else
            {   $this->errors = "Токен не валиден!";

                $result['pageHost'] = $this->patch;
                $result['validate'] = $validate;
                $result['errors']   = $this->errors;
                echo json_encode($result);
            
            }
        }else
        {
            $this->errors = "Токен отсутствует!";

            $result['pageHost'] = $this->patch;
            $result['validate'] = $validate;
            $result['errors']   = $this->errors;
            echo json_encode($result);
        }
    }

    public function signin(){

        $data     = json_decode($this->data['user'], true);

        $login    = $data['login'];
        $password = $data['password'];

        $bind = [ $login ];
        $count = R::findOne('users', 'login = ?', $bind);

        $result = [];
        if($count){

            if(password_verify($password, $count['password'])){


                $user = $this->getUserByLogin($login);
                $token = $this->token->createToken($user);

                $result['pageHost'] = $this->patch;
                $result['user'] = $user;
                $result['token'] = $token;

                echo json_encode($result); 

            }else{

                $this->errors = "Не верный пароль, попробуй ещё 100500 раз! :)";

                $result['pageHost'] = $this->patch;
                $result['errors']   = $this->errors;
                echo json_encode($result);
            }

        }else{
            $this->errors = "Нет такого логина в моей базе данных.";

            $result['pageHost'] = $this->patch;
            $result['errors']   = $this->errors;
            echo json_encode($result);
        }

    }

    public function delete()
    {
        
    }

    public function block()
    {
        
    }

    public function getUserByLogin($key)
    {
        $bind = [ $key ];

        $user = R::getRow("SELECT * FROM users WHERE login LIKE ?", $bind);

        return $user;
    }

    public function getUserById($key)
    {
        $bind = [ $key ];

        $user = R::getRow("SELECT * FROM users WHERE id LIKE ?", $bind);

        return $user;
    }
}