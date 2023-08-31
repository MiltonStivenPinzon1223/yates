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
        include 'views/accesories/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $information = $_POST['information'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $accesory = Accesory::store($name, $information, $price, $stock);
        if ($accesory > 0) {
            header('location:./');
        }
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
        $name = $_POST['name'];
        $information = $_POST['information'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 33);
        $resultado = Accesory::update($id,$name,$information,$price,$stock);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }

    public function delete()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 33);
        $resultado = Accesory::delete($id);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }


}
