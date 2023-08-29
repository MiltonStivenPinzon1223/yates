<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yacht.php";
include "models/Accesory.php";

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
}
