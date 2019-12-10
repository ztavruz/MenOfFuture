<?php

namespace Api\Controllers;

use \RedBeanPHP\R as R;

class Connect
{
    private $http;
    private $host;

    private $dbname;
    private $login;
    private $password;
    

    protected $patch;

    public function __construct(){

        $this->http = $_SERVER["HTTP_X_FORWARDED_PROTO"]; 
        $this->host = $_SERVER["HTTP_HOST"];
        
        $this->hostMonitoring();

        if (!R::testConnection()) {
            R::setup("mysql:host=localhost;dbname={$this->dbname}", 
            "{$this->login}", 
            "{$this->password}");
        }
    }

    private function hostMonitoring()
    {
        switch ($this->host) {
            
            case "ct92585.tmweb.ru":
                $this->dbname = "ct92585_test";
                $this->login = "ct92585_test";
                $this->password = "0jtpjm56";
                $this->patch = $this->http . "/";
                break;
            case "menoffuture":
                $this->dbname = "menoffuture";
                $this->login = "root";
                $this->password = "";
                $this->patch = $this->http . "://" . $this->host . "/";
                break;
        }   
    }

    public function view()
    {
        var_dump($this->host);
        echo "<br>";
        echo "<br>";
        var_dump($this->dbname);
        echo "<br>";
        echo "<br>";
        var_dump($this->login);
        echo "<br>";
        echo "<br>";
        var_dump($this->password);
        echo "<br>";
        echo "<br>";
    }
}