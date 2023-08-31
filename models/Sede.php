<?php

class Accesory{
    public $sede;
    public $direction;

    public function __construct($sede, $direction){
        $this->sede = $sede;
        $this->direction = $direction;
    }

    //=======GETTERS Y SETTERS
    public function getSede() {return $this->sede;}
    public function setSede($sede) {$this->sede = $sede;}
    public function getdirection() {return $this->direction;}
    public function setdirection($direction) {$this->direction = $direction;}

    public static function all($page){
        $start = ($page - 1) * 3;
        $sql = "SELECT * FROM sedes";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $sedes = array();
        while ($fila = $resultado->fetch_assoc()) {
            $sedes[] = $fila;
        }
        return $sedes;
    }

    public static function find($id){
        $sql = "SELECT * FROM sedes where id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $accesory[] = $fila;
        }
        return $accesory[0];
    }

    public static function update($id,$name, $direction, $sede, $stock){
        $sql = "UPDATE `sedes` SET `name`='$name',`direction`='$direction',`sede`='$sede',`stock`='$stock' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
    public static function delete($id){
        $sql = "DELETE FROM `sedes` WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function store($name, $direction, $sede, $stock){
        $sql = "INSERT INTO `sedes`(`name`, `direction`, `sede`, `stock`, `photo`) VALUES ('$name','$direction','$sede','$stock','public/images/a2.jpg')";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>