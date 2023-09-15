<?php
include_once "config/conexion.php";
include "models/Person.php";
include "models/Specialty.php";
include "models/Mechanic.php";
include "models/Sede.php";
include "models/Quote.php";

class QuoteController {
    public function index()
    {
        $quotes = Quote::all();
        include 'views/quotes/index.php';
    }

    public function create()
    {
        $specialtys = Specialty::all();
        $sedes = Sede::all();
        include 'views/quotes/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $specialty = $_POST['specialty'];
        $sede = $_POST['sede'];
        $quote = Quote::store($name, $specialty,$sede);
        if ($quote > 0) {
            header('location:./');
        }
    }

    public function edit()
    {
        $id = $_POST['id'];
        $quote = Quote::find($id);
        $specialtys = Specialty::all();
        $mechanics = Mechanic::all();
        $sedes = Sede::all();
        include 'views/quotes/edit.php';
    }

    public function update()
    {
        $name = $_POST['name'];
        $quote = $_POST['quote'];
        $specialty = $_POST['specialty'];
        $sede = $_POST['sede'];
        $url = $_SERVER["REQUEST_URI"];
        $id = substr($url, 0, -7);
        $id = substr($id, 32);
        echo $id;
        $resultado = Quote::update($id,$name,$specialty,$sede);
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
        $resultado = Quote::delete($id);
        echo $resultado;
       if ($resultado > 0) {
        header('location:../');
       }
    }


}
