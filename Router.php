<?php
class Router{
    private $controller;
    private $method;

    public function __construct()
    {
        $this->matchRoute();
    }

    function matchRoute(){
        $routes = [
            ['/', 'HomeController', 'index'],
            ['/register', 'HomeController', 'show_register'],
            ['/login', 'HomeController', 'show_login'],
        ];
        $found = false;
        foreach ($routes as $route) {
            if (URL == $route[0]) {
                $this->controller = $route[1];
                $this->method = $route[2];
                require_once(__DIR__. '/controllers/'.$this->controller.'.php');
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "Ruta no definida";
        }
    }

    function run(){
        $controller = new $this->controller();
        $method = $this->method;
        $controller->$method();

    }
}