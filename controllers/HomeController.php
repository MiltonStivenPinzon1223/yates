<?php
include_once "config/conexion.php";
include "models/Person.php";

class HomeController {
    public function index()
    {
        $yacths = Yacths::all();
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
            
            $resultado = Person::register($name, $email, $password, $document);
    
            if ($resultado) {
                echo "Registro exitoso";
                // También podrías redirigir a otra página o mostrar un mensaje de éxito de alguna manera
            } else {
                echo "Error en el registro".$resultado;
            }
        } else {
            // Manejar el caso en el que no se haya enviado un formulario POST
            echo "Acceso no válido";
        }
    }
}
