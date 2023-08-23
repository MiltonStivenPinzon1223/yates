<?php

class Accesory{
    public $price;
    public $stock;
    public $photo;
    public $information;

    public function __construct($price, $information, $stock, $photo){
        $this->price = $price;
        $this->information = $information;
        $this->stock = $stock;
        $this->photo = $photo;
    }

    //=======GETTERS Y SETTERS
    public function getPrice() {return $this->price;}
    public function setPrice($price) {$this->price = $price;}
    public function getInformation() {return $this->information;}
    public function setInformation($information) {$this->information = $information;}
    public function getstock() {return $this->stock;}
    public function setstock($stock) {$this->stock = $stock;}
    public function getPhoto() {return $this->photo;}
    public function setPhoto($photo) {$this->photo = $photo;}

    public static function all($page){
        $start = ($page - 1) * 3;
        $sql = "SELECT * FROM accessories LIMIT $start, 3";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $accesories = array();
        while ($fila = $resultado->fetch_assoc()) {
            $fila['category'] = 'accesories';
            $accesories[] = $fila;
        }
        return $accesories;
    }

    public static function find($id){
        $sql = "SELECT * FROM accessories where id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $accesory[] = $fila;
        }
        return $accesory;
    }
}

?>