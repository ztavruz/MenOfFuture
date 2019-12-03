<?php

require(__DIR__ . "/../../vendor/autoload.php");

use \RedBeanPHP\R as R;

if (!R::testConnection()) {
    R::setup("mysql:host=localhost;dbname=hardreality", "root", "");
}