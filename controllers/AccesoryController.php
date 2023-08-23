<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yacht.php";
include "models/Accesory.php";

class AccesoryController {
    public function index()
    {
        echo 'index de accesorios';
    }

    public function show($id)
    {
        echo 'show de acesorios'.$id;
    }

    public function create()
    {
        echo 'create de accesorios';
    }

    public function edit()
    {
        echo 'edit de accesorios';
    }

    public function update()
    {
        echo 'update de accesorios';
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
