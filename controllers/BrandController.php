<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/brand.php";

class BrandController {
    public function show($id)
    {
        echo 'show de acesorios'.$id;
    }

    public function create()
    {
        include 'views/brands/create.php';
    }

    public function store()
    {
        $brand = $_POST['brand'];
        $brand = brand::store($brand);
        if ($brand > 0) {
            header('location:./');
        }
    }

    public function edit()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -5);
        $id = substr($id, 29);
        $brand = brand::find($id);
        include 'views/brands/edit.php';
    }

    public function update()
    {
        $brand = $_POST['brand'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 29);
        echo $id;
        $resultado = brand::update($id,$brand);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }

    public function delete()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 29);
        $resultado = brand::delete($id);
       if ($resultado > 0) {
        header('location:../');
       }else{
        echo "No puedes eliminar este dato, debido a que se encuentra dependiendo de otro dato en la base de datos.";
       }
    }


}
