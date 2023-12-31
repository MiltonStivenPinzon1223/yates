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
        $id = $_POST['id'];
        $specialty = specialty::find($id);
        include 'views/specialtys/edit.php';
    }

    public function update()
    {
        $specialty = $_POST['specialty'];
        $id = $_POST['id'];
        $resultado = specialty::update($id,$specialty);
       if ($resultado > 0) {
        header('location:./');
       }
    }

    public function delete()
    {
        $id = $_POST['id'];
        $resultado = specialty::delete($id);
        echo $resultado;
       if ($resultado > 0) {
        header('location:./');
       }
    }


}
