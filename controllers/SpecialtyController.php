<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/specialty.php";

class SpecialtyController {
    public function show($id)
    {
        echo 'show de acesorios'.$id;
    }

    public function create()
    {
        include 'views/specialtys/create.php';
    }

    public function store()
    {
        $specialty = $_POST['specialty'];
        $specialty = specialty::store($specialty);
        if ($specialty > 0) {
            header('location:./');
        }
    }

    public function edit()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -5);
        $id = substr($id, 33);
        $specialty = specialty::find($id);
        include 'views/specialtys/edit.php';
    }

    public function update()
    {
        $specialty = $_POST['specialty'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 33);
        echo $id;
        $resultado = specialty::update($id,$specialty);
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
        $resultado = specialty::delete($id);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }


}
