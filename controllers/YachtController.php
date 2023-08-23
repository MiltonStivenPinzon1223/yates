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
        echo 'create de yates';
    }

    public function edit()
    {
        echo 'edit de yates';
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
