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
        echo 'create de accesorios';
    }

    public function store()
    {
        echo 'store de acessories';
    }

    public function edit()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -5);
        $id = substr($id, 33);
        $accesory = Accesory::find($id);
        include 'views/accesories/edit.php';
    }

    public function update()
    {
        echo 'update de accesorios';
    }

    public function delete()
    {
        echo 'delete de accesories';
    }


}
