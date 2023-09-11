<?php

class Brand{
    public $brand;

    public function __construct($brand){
        $this->brand = $brand;
    }

    //=======GETTERS Y SETTERS
    public function getbrand() {return $this->brand;}
    public function setbrand($brand) {$this->brand = $brand;}

    public static function all($page){
        $sql = "SELECT * FROM brands";
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

    public static function update($id,$brand){
        $sql = "UPDATE `brands` SET `brand`='$brand' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
    public static function delete($id){
        $sql = "DELETE FROM `brands` WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function store($brand){
        $sql = "INSERT INTO `brands`(`brand`) VALUES ('$brand')";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>