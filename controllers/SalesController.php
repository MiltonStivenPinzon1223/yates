<?php
include_once "config/conexion.php";
include "models/Sales.php";
include "models/Yacht.php";
include "models/Accesory.php";

class SalesController {
    public function show()
    {
        $id = $_POST['id'];
        $category = $_POST['category'];
        if ($category == 'yachts') {
            $product = Yacht::find($id);
            include 'views/sales/show_yacht.php';
        }else{
            $product = Accesory::find($id);
            include 'views/sales/show_accessory.php';
        }
    }

    public function store()
    {
        session_start();
        $id_user = $_SESSION['id'];
        if ($id_user === null) {
            die('Debes iniciar sesion<br><a href="../login">Iniciar Sesion</a>');
        }else{
            $id = $_POST['id'];
            $category = $_POST['category'];
            $sale = Sales::store($id, $category, $id_user);
            if ($sale > 0) {
                header('location:../');
            }
        }
    }

    public function edit()
    {
        $id = $_POST['id'];
        $sale = Sales::find($id);
        include 'views/sales/edit.php';
    }

    public function update()
    {
        $sale = $_POST['sale'];
        $direction = $_POST['direction'];
        $id = $_POST['id'];
        $resultado = Sales::update($id,$sale,$direction);
        echo $resultado;
       if ($resultado > 0) {
        header('location:./');
       }
    }

    public function delete()
    {
        $id = $_POST['id'];
        $resultado = Sales::delete($id);
        echo $resultado;
       if ($resultado > 0) {
        header('location:./');
       }
    }


}
