<?php

class Specialty{
    public $specialty;

    public function __construct($specialty){
        $this->specialty = $specialty;
    }

    //=======GETTERS Y SETTERS
    public function getspecialty() {return $this->specialty;}
    public function setspecialty($specialty) {$this->specialty = $specialty;}

    public static function all(){
        $sql = "SELECT * FROM specialtys";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $specialtys = array();
        while ($fila = $resultado->fetch_assoc()) {
            $specialtys[] = $fila;
        }
        return $specialtys;
    }

    public static function find($id){
        $sql = "SELECT * FROM specialtys where id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $specialty[] = $fila;
        }
        return $specialty[0];
    }

    public static function update($id,$specialty){
        $sql = "UPDATE `specialtys` SET `specialty`='$specialty' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
    public static function delete($id){
        $sql = "DELETE FROM `specialtys` WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function store($specialty){
        $sql = "INSERT INTO `specialtys`(`specialty`) VALUES ('$specialty')";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>