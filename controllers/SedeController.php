<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Yacht.php";
include "models/Sede.php";

class SedeController {
    public function show($id)
    {
        echo 'show de acesorios'.$id;
    }

    public function create()
    {
        include 'views/sedes/create.php';
    }

    public function store()
    {
        $sede = $_POST['sede'];
        $direction = $_POST['direction'];
        $sede = Sede::store($sede, $direction);
        if ($sede > 0) {
            header('location:./');
        }
    }

    public function edit()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -5);
        $id = substr($id, 28);
        $sede = Sede::find($id);
        include 'views/sedes/edit.php';
    }

    public function update()
    {
        $sede = $_POST['sede'];
        $direction = $_POST['direction'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 33);
        $resultado = Sede::update($id,$sede,$direction);
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
        $resultado = Sede::delete($id);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }


}
