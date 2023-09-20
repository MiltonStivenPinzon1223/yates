<?php
include_once "config/conexion.php";
include "controllers/AccesoryController.php";
include "./models/Sede.php";
include "./models/Specialty.php";
include "./models/Brand.php";
include "./models/Quote.php";
include "./models/Mechanic.php";

class AdministraitorController {
    public function index()
    {
        session_start();
        $email= $_SESSION['email'];
        $password= $_SESSION['password'];
        $user = Person::getUser($email, $password);
        if (!$user) {
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
        if (!$user) {
            die('debes iniciar sesion');
        }else   {
            if ($user['id_rols'] ==2) {
                $id =$_POST['id'];
                $user = Person::find($id);
                include 'views/administraitors/edit.php';
            }else {
                echo "no puedes editarlo";
            }
        }
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $type_document = $_POST['type_document'];
        $document = $_POST['document'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        $resultado = Person::update($id,$name,$type_document,$document,$email,$rol);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../users/');
       }
    }

    public function updateStatus()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];
        echo $id;
        $r = ($status == 'Desactivar') ? '0' : '1';
        $resultado = Person::updateStatus($id,$r);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../users/');
       }
    }

    public function options(){
        $url = $_SERVER["REQUEST_URI"];
        $url = str_replace("/yates/administraitor/","",$url);
        switch ($url) {
            case 'accesories/':
                $accesories = Accesory::all();
                include 'views/accesories/index.php';
                break;
            case 'sedes/':
                $sedes = Sede::all(1);
                include 'views/sedes/index.php';
                break;
            case 'yachts/':
                $yachts = Yacht::all();
                include 'views/yachts/index.php';
                break;
            case 'quotes/':
                $quotes = Quote::all();
                include 'views/administraitors/quotes.php';
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

    public function show(){
        $users = Person::all();
        return $users;
    }
}
