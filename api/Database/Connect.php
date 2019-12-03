<?php

namespace Api\Database;

use \RedBeanPHP\R as R;

class Connect
{
    public static function connect(){

        if (!R::testConnection()) {
            R::setup("mysql:host=localhost;dbname=hardreality", "root", "");
        }

    }
}