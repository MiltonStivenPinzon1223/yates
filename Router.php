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
            ['/administraitor/accesories/edit', 'AccesoryController', 'edit'],
            ['/administraitor/accesories/update', 'AccesoryController', 'update'],
            ['/administraitor/accesories/create', 'AccesoryController', 'create'],
            ['/administraitor/accesories/store', 'AccesoryController', 'store'],
            ['/administraitor/accesories/delete', 'AccesoryController', 'delete'],
            ['/administraitor/sedes/', 'AdministraitorController', 'options'],
            ['/administraitor/sedes/edit', 'SedeController', 'edit'],
            ['/administraitor/sedes/update', 'SedeController', 'update'],
            ['/administraitor/sedes/create', 'SedeController', 'create'],
            ['/administraitor/sedes/store', 'SedeController', 'store'],
            ['/administraitor/sedes/delete', 'SedeController', 'delete'],
            ['/administraitor/specialtys/', 'AdministraitorController', 'options'],
            ['/administraitor/specialtys/edit', 'SpecialtyController', 'edit'],
            ['/administraitor/specialtys/update', 'SpecialtyController', 'update'],
            ['/administraitor/specialtys/create', 'SpecialtyController', 'create'],
            ['/administraitor/specialtys/store', 'SpecialtyController', 'store'],
            ['/administraitor/specialtys/delete', 'SpecialtyController', 'delete'],
            ['/administraitor/yachts/', 'AdministraitorController', 'options'],
            ['/administraitor/quotes/', 'AdministraitorController', 'options'],
            ['/administraitor/quotes/edit', 'QuoteController', 'edit'],
            ['/administraitor/quotes/update', 'QuoteController', 'update'],
            ['/administraitor/quotes/delete', 'QuoteController', 'delete'],
            ['/administraitor/sales/', 'AdministraitorController', 'options'],
            ['/administraitor/mechanics/', 'AdministraitorController', 'options'],
            ['/administraitor/mechanics/edit', 'MechanicController', 'edit'],
            ['/administraitor/mechanics/update', 'MechanicController', 'update'],
            ['/administraitor/mechanics/create', 'MechanicController', 'create'],
            ['/administraitor/mechanics/store', 'MechanicController', 'store'],
            ['/administraitor/mechanics/delete', 'MechanicController', 'delete'],
            ['/administraitor/users/', 'AdministraitorController', 'options'],
            ['/administraitor/users/edit', 'AdministraitorController', 'edit'],
            ['/administraitor/users/update', 'AdministraitorController', 'update'],
            ['/administraitor/users/create', 'AdministraitorController', 'create'],
            ['/administraitor/users/store', 'AdministraitorController', 'store'],
            ['/administraitor/users/delete', 'AdministraitorController', 'delete'],
            ['/administraitor/users/status', 'AdministraitorController', 'updateStatus'],
            ['/administraitor/brands/', 'AdministraitorController', 'options'],
            ['/administraitor/brands/edit', 'BrandController', 'edit'],
            ['/administraitor/brands/update', 'BrandController', 'update'],
            ['/administraitor/brands/create', 'BrandController', 'create'],
            ['/administraitor/brands/store', 'BrandController', 'store'],
            ['/administraitor/brands/delete', 'BrandController', 'delete'],
            ['/administraitor/logout', 'AdministraitorController', 'logout'],
            ['/accesories/', 'AccesoryController', 'index'],
            ['/accesories', 'AccesoryController', 'show'],
            ['/yachts/', 'YachtController', 'index'],
            ['/yachts', 'YachtController', 'show'],
            ['/yachts/edit', 'YachtController', 'edit'],
            ['/yachts/update', 'YachtController', 'update'],
            ['/yachts/delete', 'YachtController', 'delete'],
            ['/register', 'HomeController', 'show_register'],
            ['/about', 'HomeController', 'about'],
            ['/quotes', 'QuoteController', 'index'],
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