<?php

namespace Engine\Router;
use Engine\View\View;

class Router
{
    private $url;
    private $routes = [];
    private $params = [];

    public function __construct($routes)
    {
        $this->url = $this->url();
        
        $this->routes = $this->loadRoutes();
    }

    public function start()
    {
        if ($this->pageExists()) {
            $controller_name = ucfirst($this->params['controller']) . 'Controller';
            $namespace = "Engine\\Controllers\\" . $controller_name;
            $model_name = ucfirst($this->params['controller']);

            if (class_exists($namespace)) {
                $controller = new $namespace($this->params);
                $method = $this->params['method'] . 'Action';

                if (method_exists($controller, $method)) {
                    $controller->$method();
                }else
                {
                 exit("Метод " . $method . " не найден в классе " . $namespace);
                }
            }else
            {
             exit("Контроллер " . $controller_name . " не найден.");
            }
        }else
        {
         exit("Роут " . $this->url . " не найден.");
        }
        
    }

    public function url()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = trim($url, '/');
        $url = preg_replace("#\?.*$#", null, $url);
        if ($url == '') {
            $url = 'guest';
        }

        return $url;
    }

    public function loadRoutes()
    {
        $routes = require CONFIG_DIR . "routes.php";
        
        return $routes;
    }


    public function pageExists()
    {

        foreach ($this->routes as $key => $route) {
            if ($this->url == $key) {
                $this->params = $route;
                return true;
            }
        }

        return false;
    }
}

