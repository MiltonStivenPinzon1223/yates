<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yacht.php";
include "models/Accesory.php";

class AccesoryController {
    public function show($id)
    {
        echo 'show de acesorios'.$id;
    }

    public function create()
    {
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                include 'views/accesories/create.php';
            }else {
                echo "no puedes editarlo";
            }
        }
        
    }

    public function store()
    {
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $name = $_POST['name'];
                $information = $_POST['information'];
                $price = $_POST['price'];
                $stock = $_POST['stock'];
                $accesory = Accesory::store($name, $information, $price, $stock);
                if ($accesory > 0) {
                    header('location:./');
                }
            }else {
                echo "no puedes editarlo";
            }
        }
        
    }

    public function edit()
    {
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $url = $_SERVER["REQUEST_URI"];
                $id = substr($url, 0, -5);
                $id = substr($id, 33);
                $accesory = Accesory::find($id);
                include 'views/accesories/edit.php';
            }else {
                echo "no puedes editarlo";
            }
        }
    }

    public function update()
    {
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $name = $_POST['name'];
                $information = $_POST['information'];
                $price = $_POST['price'];
                $stock = $_POST['stock'];
                $url = $_SERVER["REQUEST_URI"];
                $id = substr($url, 0, -7);
                $id = substr($id, 33);
                $resultado = Accesory::update($id,$name,$information,$price,$stock);
                echo $resultado;
                if ($resultado > 0) {
                    header('location:../');
                }
            }else {
                echo "no puedes editarlo";
            }
        }
    }

    public function delete()
    {
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $url = $_SERVER["REQUEST_URI"];
                $id = substr($url, 0, -7);
                $id = substr($id, 33);
                $resultado = Accesory::delete($id);
                echo $resultado;
                if ($resultado > 0) {
                    header('location:../');
                }
            }else {
                echo "no puedes editarlo";
            }
        }
        
    }


}
