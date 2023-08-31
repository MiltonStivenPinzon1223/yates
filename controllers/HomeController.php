<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yacht.php";
include "models/Accesory.php";

class HomeController {
    public function index()
    {
        $page = $_SERVER["REQUEST_URI"];
        $page = str_replace("/yates/","",$page);
        $page = ($page == "") ? '1' : $page;
        $yachts = Yacht::all($page);
        $accesories = Accesory::all($page);
        $products = array_merge($accesories, $yachts);

        shuffle($products);
        // print_r($products);
        include 'views/index.php';
    }

    public function about()
    {
        include 'views/about.html';
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
            if ($register) {
                echo "Registro exitoso";
            }else {
                echo "Error en el registro".$register;
            }
        } else {
            echo "Acceso no válido";
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = Person::getUser($email, $password);
        if ($user) {
            session_start();
            $_SESSION['user'] = $user;
            print_r($user);
            echo "<a href='./yachts/1/edit'>Editar Yate</a>";
        }else{
            echo "error";
        }
    }
        return false;
    }
}
