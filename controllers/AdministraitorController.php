<?php
include_once "config/conexion.php";
include "controllers/AccesoryController.php";
include "./models/Sede.php";
include "./models/Specialty.php";
include "./models/Brand.php";
include "./models/Mechanic.php";

class AdministraitorController {
    public function index()
    {
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                include 'views/administraitors/index.php';
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
        $conexion = new conexion();
        $conexion->conect();
        $sql = "SELECT * FROM type_documents";
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {$type_documents[] = $fila;}
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $url = $_SERVER["REQUEST_URI"];
                $id = substr($url, 0, -5);
                $id = substr($id, 28);
                $user = Person::find($id);
                include 'views/administraitors/edit.php';
            }else {
                echo "no puedes editarlo";
            }
        }
    }

    public function update()
    {
        $name = $_POST['name'];
        $type_document = $_POST['type_document'];
        $document = $_POST['document'];
        $email = $_POST['email'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 28);
        $resultado = Person::update($id,$name,$type_document,$document,$email);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }

    public function updateStatus()
    {
        $status = $_POST['status'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 28);
        $resultado = Person::updateStatus($id,$status);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }

    public function options(){
        $url = $_SERVER["REQUEST_URI"];
        $url = str_replace("/yates/administraitor/","",$url);
        switch ($url) {
            case 'accesories/':
                $accesories = Accesory::all(1);
                include 'views/accesories/index.php';
                break;
            case 'sedes/':
                $sedes = Sede::all(1);
                include 'views/sedes/index.php';
                break;
            case 'yachts/':
                echo $url;
                break;
            case 'quotes/':
                echo $url;
                break;
            case 'sales/':
                echo $url;
                break;
            case 'specialtys/':
                $specialtys = Specialty::all(1);
                include 'views/specialtys/index.php';
                break;
            case 'mechanics/':
                $mechanics = Mechanic::all(1);
                include 'views/mechanics/index.php';
                break;
            case 'users/':
                $users = $this->show();
                include 'views/administraitors/show.php';
                break;
            case 'brands/':
                $brands = Brand::all(1);
                include 'views/brands/index.php';
                break;
            default:
                echo $url;
                break;
        }
    }

    function show(){
        $users = Person::all();
        return $users;
    }
}
