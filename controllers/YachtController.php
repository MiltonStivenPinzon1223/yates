<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yacht.php";
include "models/Accesory.php";

class YachtController {
    public function index()
    {
        echo "index de yates";
    }

    public function show()
    {
        
        $yacht = Yacht::find(1);
        include 'views/yachts/show.php';
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
                echo "puedes editarlo";
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
                echo "puedes editarlo";
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
                echo "puedes editarlo";
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
                echo "puedes editarlo";
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
                echo "puedes editarlo";
            }else {
                echo "no puedes editarlo";
            }
        }
    }
}
