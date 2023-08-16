<?php
include_once "config/conexion.php";
include "models/Person.php";

class HomeController {
    public function index()
    {
        //$yacths = Yacths::all();
        include 'views/index.php';
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

    function register(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $document = $_POST['document'];
            
            $register = Person::register($name, $email, $password, $document);
            if (!$register) {
                echo "Registro exitoso";
            }else {
                echo "Error en el registro".$register;
            }
        } else {
            echo "Acceso no válido";
        }
    }
}
