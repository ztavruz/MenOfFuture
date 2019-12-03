<?php

require(__DIR__ . "/../vendor/autoload.php");
use \RedBeanPHP\R as R;
use Api\Database\Connect;

Connect::connect();

var_dump(
    R::getAll("SELECT*FROM users")
);