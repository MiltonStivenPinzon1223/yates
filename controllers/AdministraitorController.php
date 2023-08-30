<?php
include_once "config/conexion.php";
include "controllers/AccesoryController.php";

class AdministraitorController {
    public function index()
    {
        // if ($_SESSION['user'] == 'admin') {
            include 'views/administraitors/index.php';
        // }
    }

    public function show()
    {
        $yacht = Yacht::find(1);
        include 'views/yachts/show.php';
    }

    public function create()
    {
        echo 'create de yates';
    }

    public function edit()
    {
        if ($_SESSION['user'] == null) {
            die('debes iniciar sesion');
        }else   {
            if ($_SESSION['user']['id_rols'] ==1) {
                echo "puedes editarlo";
            }else {
                echo "no puedes editarlo";
            }
        }
    }

    public function update()
    {
        echo 'update de yates';
    }

    public function store()
    {
        echo 'store de acessories';
    }

    public function delete()
    {
        echo 'delete de accesories';
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
                echo $url;
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
            case 'services/':
                echo $url;
                break;
            case 'mechanics/':
                echo $url;
                break;
            case 'users/':
                echo $url;
                break;
            case 'brands/':
                echo $url;
                break;
            default:
                echo $url;
                break;
        }
    }
}
