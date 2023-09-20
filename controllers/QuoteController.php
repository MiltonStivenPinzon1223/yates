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
        $date = $_POST['date'];
        $hour = $_POST['hour'];
        $specialty = $_POST['specialty'];
        $sede = $_POST['sede'];
        $quote = Quote::store($date,$hour,$specialty,$sede);
        if ($quote > 0) {
            header('location:../quotes');
        }
    }

    public function edit()
    {
        session_start();
        $id_users = $_SESSION['id'];
        $id = $_POST['id'];
        $quote = Quote::find($id);
        $specialtys = Specialty::all();
        $mechanics = Mechanic::all();
        $sedes = Sede::all();
        include 'views/quotes/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $id_user = $_POST['id_users'];
        $date = $_POST['date'];
        $hour = $_POST['hour'];
        $specialty = $_POST['specialty'];
        $sede = $_POST['sede'];
        $quote = Quote::update($id,$date,$hour,$specialty,$sede,$id_user);
        if ($quote > 0) {
            header('location:../quotes');
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
