<?php
include_once "config/conexion.php";

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

    function register(){
       $name = $_REQUEST['name'];
       $email = $_REQUEST['email'];
       $password = $_REQUEST['password'];
       $conexion = new conexion();
       $conexion->conect();
       $sql = "INSERT INTO `usuarios`(`id`, `name`, `email`, `password`, `age`, `id_roles`) VALUES ('$name','$email',$password','18','1')";
       $resultado = $conexion->query($sql);
       if ($resultado) {
        echo "registro exitoso";
       }else{
        echo "error".$resultado;
       }
    }
}
