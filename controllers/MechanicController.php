<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Specialty.php";
include "models/Sede.php";
include "models/Mechanic.php";

class MechanicController {
    public function show($id)
    {
        $mechanic = mechanic::find($id);
        include 'views/mechanics/create.php';
    }

    public function create()
    {
        $specialtys = Specialty::all();
        $sedes = Sede::all();
        include 'views/mechanics/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $specialty = $_POST['specialty'];
        $sede = $_POST['sede'];
        $mechanic = mechanic::store($name, $specialty,$sede);
        if ($mechanic > 0) {
            header('location:./');
        }
    }

    public function edit()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -5);
        $id = substr($id, 32);
        $mechanic = mechanic::find($id);
        $specialtys = Specialty::all();
        $sedes = Sede::all();
        include 'views/mechanics/edit.php';
    }

    public function update()
    {
        $name = $_POST['name'];
        $mechanic = $_POST['mechanic'];
        $specialty = $_POST['specialty'];
        $sede = $_POST['sede'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 32);
        echo $id;
        $resultado = mechanic::update($id,$name,$specialty,$sede);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }

    public function delete()
    {
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 32);
        $resultado = mechanic::delete($id);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }


}
