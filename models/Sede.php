<?php

class Sede{
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
            $sede[] = $fila;
        }
        return $sede[0];
    }

    public static function update($id,$sede, $direction){
        $sql = "UPDATE `sedes` SET `sede`='$sede',`direction`='$direction' WHERE id = $id";
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

    public static function store($sede, $direction){
        $sql = "INSERT INTO `sedes`(`sede`, `direction`) VALUES ('$sede','$direction')";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>