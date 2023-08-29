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
            ['/administraitor', 'AdministraitorController', 'index'],
            ['/administraitor/accesories/', 'AdministraitorController', 'options'],
            ['/administraitor/sedes/', 'AdministraitorController', 'options'],
            ['/administraitor/yachts/', 'AdministraitorController', 'options'],
            ['/administraitor/quotes/', 'AdministraitorController', 'options'],
            ['/administraitor/sales/', 'AdministraitorController', 'options'],
            ['/administraitor/services/', 'AdministraitorController', 'options'],
            ['/administraitor/mechanics/', 'AdministraitorController', 'options'],
            ['/administraitor/users/', 'AdministraitorController', 'options'],
            ['/administraitor/brands/', 'AdministraitorController', 'options'],
            ['/accesories/', 'AccesoryController', 'index'],
            ['/accesories/1', 'AccesoryController', 'show'],
            ['/accesories/1/edit', 'AccesoryController', 'edit'],
            ['/accesories/1/update', 'AccesoryController', 'update'],
            ['/accesories/1/delete', 'AccesoryController', 'delete'],
            ['/yachts/', 'YachtController', 'index'],
            ['/yachts/1', 'YachtController', 'show'],
            ['/yachts/1/edit', 'YachtController', 'edit'],
            ['/yachts/1/update', 'YachtController', 'update'],
            ['/yachts/1/delete', 'YachtController', 'delete'],
            ['/register', 'HomeController', 'show_register'],
            ['/about', 'HomeController', 'about'],
            ['/quoutas', 'QuotesController', 'index'],
            ['/registers', 'HomeController', 'register'],
            ['/login', 'HomeController', 'show_login'],
            ['/loginn', 'HomeController', 'login'],
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