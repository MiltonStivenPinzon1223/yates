<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yacht.php";
include "models/Brand.php";

class YachtController {
    public function index()
    {
        echo "index de yates";
    }

    public function show()
    {
        $id = $_POST["id"];
        $yacht = Yacht::find($id);
        include 'views/yachts/show.php';
    }

    public function create()
    {
        $brands = Brand::all();
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($email == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                include 'views/yachts/create.php';
            }else {
                echo "no puedes editarlo";
            }
        }
    }

    public function edit()
    {
        $id = $_POST['id'];
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($email == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $brands = Brand::all();
                $yacht = Yacht::find($id);
                if ($yacht == null) {
                    echo "No se encontro Yate";
                }else{
                    include 'views/yachts/edit.php';
                }
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
        if ($email == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $id = $_POST['id'];
                $model = $_POST['model'];
                $brand = $_POST['brand'];
                $price = $_POST['price'];
                $information = $_POST['information'];
                $serie = $_POST['serie'];
                $yacht = Yacht::update($id,$model,$brand,$price,$information,$serie);
                if ($yacht > 0) {
                    header('location:../yachts/');
                }else{
                    echo "Error";
                }
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
        $id_users = $_SESSION['id'];
        if ($email == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $model = $_POST['model'];
                $brand = $_POST['brand'];
                $price = $_POST['price'];
                $information = $_POST['information'];
                $serie = $_POST['serie'];
                $yacht = Yacht::store($model,$brand,$price,$information,$serie,$id_users);
                if ($yacht > 0) {
                    header('location:../yachts/');
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
        if ($email == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $id = $_POST['id'];
                $yacht = Yacht::delete($id);
                if ($yacht > 0) {
                    header('location:../yachts/');
                }
            }else {
                echo "no puedes editarlo";
            }
        }
    }
}
