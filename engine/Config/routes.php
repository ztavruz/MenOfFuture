<?php

return [

    "guest" => [
        'controller' => 'user',
        'method'     => 'guest',
        'page'     => 'guest'
    ],
    "register" => [
        'controller' => 'user',
        'method'     => 'register',
        'page'     => 'register'
    ],
    "newuser" => [
        'controller' => 'user',
        'method'     => 'create',
        'page'     => 'main'
    ],
    "author" => [
        'controller' => 'user',
        'method'     => 'author',
        'page'     => 'main'
    ],
    "main" => [
        'controller' => 'user',
        'method'     => 'main',
        'page'     => 'main'
    ],
    
    "allUser" => [
        'controller' => 'user',
        'method'     => 'allUser'
    ],

];