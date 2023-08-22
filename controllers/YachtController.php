<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yachts.php";
include "models/Accesories.php";

class YachtController {
    public function index()
    {
        $page = $_SERVER["REQUEST_URI"];
        $page = str_replace("/yates/","",$page);
        $page = ($page == "") ? '1' : $page;
        $yachts = Yachts::all($page);
        $accesories = Accesories::all($page);
        $products = array_merge($accesories, $yachts);

        shuffle($products);
        // print_r($products);
        include 'views/index.php';
    }

    public function show()
    {
        echo 'show de acesorios';
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
