<?php

class Yacht{
    public $price;
    public $brand;
    public $model;
    public $photo;
    public $information;
    private $serie;

    public function __construct($price, $information, $serie, $brand, $model, $photo){
        $this->price = $price;
        $this->information = $information;
        $this->serie = $serie;
        $this->brand = $brand;
        $this->model = $model;
        $this->photo = $photo;
    }

    //=======GETTERS Y SETTERS
    public function getPrice() {return $this->price;}
    public function setPrice($price) {$this->price = $price;}
    public function getInformation() {return $this->information;}
    public function setInformation($information) {$this->information = $information;}
    public function getSerie() {return $this->serie;}
    public function setSerie($serie) {$this->serie = $serie;}
    public function getBrand() {return $this->brand;}
    public function setBrand($brand) {$this->brand = $brand;}
    public function getModel() {return $this->model;}
    public function setModel($model) {$this->model = $model;}
    public function getPhoto() {return $this->photo;}
    public function setPhoto($photo) {$this->photo = $photo;}

    public static function page($page){
        $start = ($page - 1) * 3;
        $sql = "SELECT * FROM yachts WHERE id_users = 1 LIMIT $start, 3";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $yachts = array();
        while ($fila = $resultado->fetch_assoc()) {
            $fila['category'] = 'yachts';
            $yachts[] = $fila;
        }
        return $yachts;
    }

    public static function find($id){
        $sql = "SELECT yachts.*, users.name as 'owner', brands.brand as 'brand' FROM yachts INNER JOIN users ON yachts.id_users = users.id INNER JOIN brands ON yachts.id_brands =brands.id WHERE yachts.id=$id;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $yacht[] = $fila;
        }
        return $yacht[0];
    }

    public static function all(){
        $sql = "SELECT * FROM yachts";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $yachts = array();
        while ($fila = $resultado->fetch_assoc()) {
            $yachts[] = $fila;
        }
        return $yachts;
    }

    public static function update($id,$model,$brand,$price,$information,$serie){
        $sql = "UPDATE `yachts` SET `model`='$model',`price`='$price',`information`='$information',`serie`='$serie',`id_brands`='$brand' WHERE id=$id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
    public static function delete($id){
        $sql = "DELETE FROM `yachts` WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function store($model,$brand,$price,$information,$serie,$id_users){
        $sql = "INSERT INTO `yachts`(`model`, `price`, `information`, `serie`, `photo`, `id_users`, `id_brands`) VALUES ('$model','$price','$information','$serie','public/images/p1.jpg','$id_users','$brand')";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>