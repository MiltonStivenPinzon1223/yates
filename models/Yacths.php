<?php

class Yacths{
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

    public function all(){
        $sql = "SELECT * FROM yacths";
        $conexion = new conexion();
        $conexion->conect();
        $yacths = $conexion->query($sql);
        return $yacths;
    }
}

?>