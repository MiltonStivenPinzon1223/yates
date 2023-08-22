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
            ['/2', 'HomeController', 'index'],
            ['/accesories/', 'AccesoryController', 'index'],
            ['/accesories/{id}', 'AccesoryController', 'show'],
            ['/accesories/{id}/edit', 'AccesoryController', 'edit'],
            ['/accesories/{id}/update', 'AccesoryController', 'update'],
            ['/accesories/{id}/delete', 'AccesoryController', 'delete'],
            ['/yachts/', 'YachtController', 'index'],
            ['/yachts/{id}', 'YachtController', 'show'],
            ['/yachts/{id}/edit', 'YachtController', 'edit'],
            ['/yachts/{id}/update', 'YachtController', 'update'],
            ['/yachts/{id}/delete', 'YachtController', 'delete'],
            ['/register', 'HomeController', 'show_register'],
            ['/about', 'HomeController', 'about'],
            ['/quoutas', 'QuotesController', 'index'],
            ['/registers', 'HomeController', 'register'],
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