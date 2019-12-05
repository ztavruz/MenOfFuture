<?php

namespace Api\Controllers;

use \RedBeanPHP\R as R;

class Connect
{
    public function __construct(){

        if (!R::testConnection()) {
            R::setup("mysql:host=localhost;dbname=menoffuture", 
            "root", 
            "");
        }
    }
}