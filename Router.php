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
            ['/administraitor/accesories/1/edit', 'AccesoryController', 'edit'],
            ['/administraitor/accesories/1/update', 'AccesoryController', 'update'],
            ['/administraitor/accesories/create', 'AccesoryController', 'create'],
            ['/administraitor/accesories/store', 'AccesoryController', 'store'],
            ['/administraitor/accesories/1/delete', 'AccesoryController', 'delete'],
            ['/administraitor/sedes/', 'AdministraitorController', 'options'],
            ['/administraitor/sedes/1/edit', 'SedeController', 'edit'],
            ['/administraitor/sedes/1/update', 'SedeController', 'update'],
            ['/administraitor/sedes/create', 'SedeController', 'create'],
            ['/administraitor/sedes/store', 'SedeController', 'store'],
            ['/administraitor/sedes/1/delete', 'SedeController', 'delete'],
            ['/administraitor/specialtys/', 'AdministraitorController', 'options'],
            ['/administraitor/specialtys/1/edit', 'SpecialtyController', 'edit'],
            ['/administraitor/specialtys/1/update', 'SpecialtyController', 'update'],
            ['/administraitor/specialtys/create', 'SpecialtyController', 'create'],
            ['/administraitor/specialtys/store', 'SpecialtyController', 'store'],
            ['/administraitor/yachts/', 'AdministraitorController', 'options'],
            ['/administraitor/quotes/', 'AdministraitorController', 'options'],
            ['/administraitor/sales/', 'AdministraitorController', 'options'],
            ['/administraitor/mechanics/', 'AdministraitorController', 'options'],
            ['/administraitor/mechanics/1/edit', 'MechanicController', 'edit'],
            ['/administraitor/mechanics/1/update', 'MechanicController', 'update'],
            ['/administraitor/mechanics/create', 'MechanicController', 'create'],
            ['/administraitor/mechanics/store', 'MechanicController', 'store'],
            ['/administraitor/mechanics/1/delete', 'MechanicController', 'delete'],
            ['/administraitor/users/', 'AdministraitorController', 'options'],
            ['/administraitor/users/2/edit', 'AdministraitorController', 'edit'],
            ['/administraitor/users/2/update', 'AdministraitorController', 'update'],
            ['/administraitor/users/create', 'AdministraitorController', 'create'],
            ['/administraitor/users/store', 'AdministraitorController', 'store'],
            ['/administraitor/users/2/delete', 'AdministraitorController', 'delete'],
            ['/administraitor/users/2/status', 'AdministraitorController', 'updateStatus'],
            ['/administraitor/brands/', 'AdministraitorController', 'options'],
            ['/administraitor/brands/1/delete', 'BrandController', 'delete'],
            ['/administraitor/brands/', 'AdministraitorController', 'options'],
            ['/administraitor/brands/1/edit', 'BrandController', 'edit'],
            ['/administraitor/brands/1/update', 'BrandController', 'update'],
            ['/administraitor/brands/create', 'BrandController', 'create'],
            ['/administraitor/brands/store', 'BrandController', 'store'],
            ['/administraitor/brands/1/delete', 'BrandController', 'delete'],
            ['/administraitor/logout', 'AdministraitorController', 'logout'],
            ['/accesories/', 'AccesoryController', 'index'],
            ['/accesories/1', 'AccesoryController', 'show'],
            ['/yachts/', 'YachtController', 'index'],
            ['/yachts/1', 'YachtController', 'show'],
            ['/yachts/1/edit', 'YachtController', 'edit'],
            ['/yachts/1/update', 'YachtController', 'update'],
            ['/yachts/1/delete', 'YachtController', 'delete'],
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