<?php

class Sales{

    public static function all_accessories(){
        $sql = "SELECT accessories_sales.date, accessories_sales.method, accessories.price, accessories.name as accessory, users.name as user FROM accessories_sales INNER JOIN accessories ON accessories_sales.id_accesories = accessories.id INNER JOIN users ON accessories_sales.id_users = users.id;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $brands = array();
        while ($fila = $resultado->fetch_assoc()) {
            $brands[] = $fila;
        }
        return $brands;
    }

    public static function all(){
        $sql = "SELECT COUNT(*) as yachts, (SELECT COUNT(*) from accessories_sales) as accessories from yacht_sales;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $brands = array();
        while ($fila = $resultado->fetch_assoc()) {
            $brands[] = $fila;
        }
        return $brands;
    }

    public static function all_yachts(){
        $sql = "SELECT yacht_sales.date, payment_method.method, yachts.price, yachts.model as yacht, users.name as user FROM yacht_sales INNER JOIN yachts ON yacht_sales.id_yachts = yachts.id INNER JOIN payment_method ON yacht_sales.id_payment_method = payment_method.id INNER JOIN users ON yacht_sales.id_users = users.id;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $brands = array();
        while ($fila = $resultado->fetch_assoc()) {
            $brands[] = $fila;
        }
        return $brands;
    }

    public static function find($id){
        $sql = "SELECT * FROM brands where id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $brand[] = $fila;
        }
        return $brand[0];
    }

    public static function sum_yachts(){
        $conexion = new conexion();
        $conexion->conect();
        $sales = array();
        for ($i=1; $i < 13; $i++) {
            $num = "'%-0".$i."-%'";
            if ($i >= 10) {$num ="'%-".$i."-%'";}
            $sql = "SELECT SUM(yachts.price) as sales FROM `yacht_sales` INNER JOIN yachts ON yacht_sales.id_yachts = yachts.id WHERE date like $num;";
            $resultado = $conexion->query($sql);
            while ($fila = $resultado->fetch_assoc()) {
                if ($fila['sales'] ==null) {
                    $sale[0] = 0;
                }else{
                $sale[0] = $fila['sales'];
                }
            }
            array_push($sales,$sale[0]);
        }
        return $sales;
    }

    public static function sum_accessories(){
        $conexion = new conexion();
        $conexion->conect();
        $sales = array();
        for ($i=1; $i < 13; $i++) {
            $num = "'%-0".$i."-%'";
            if ($i >= 10) {$num ="'%-".$i."-%'";}
            $sql = "SELECT SUM(accessories.price) as sales FROM `accessories_sales` INNER JOIN accessories ON accessories_sales.id_accesories = accessories.id WHERE date like $num";
            $resultado = $conexion->query($sql);
            while ($fila = $resultado->fetch_assoc()) {
                if ($fila['sales'] ==null) {
                    $sale[0] = 0;
                }else{
                $sale[0] = $fila['sales'];
                }
            }
            array_push($sales,$sale[0]);
        }
        return $sales;
    }
}

?>