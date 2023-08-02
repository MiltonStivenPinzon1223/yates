<?php

class HomeController {
    public function index()
    {
        echo 'asd a la página de inicio';
    }

    public function about()
    {
        echo 'Acerca de nosotros';
    }

    public function contact()
    {
        echo 'Página de contacto';
    }

    public function show_register(){include 'views/auth/register.php';}
    public function show_login(){include 'views/auth/login.php';}

    function register($request){
        var_dump($request);
    }
}
