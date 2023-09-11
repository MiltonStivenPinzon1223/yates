<?php

class Mechanic{
    public $name;
    public $specialty;
    public $sede;

    public function __construct($name,$specialty, $sede){
        $this->name = $name;
        $this->specialty = $specialty;
        $this->sede = $sede;
    }

    //=======GETTERS Y SETTERS
    public function getname() {return $this->name;}
    public function setname($name) {$this->name = $name;}
    public function getsede() {return $this->sede;}
    public function setsede($sede) {$this->sede = $sede;}
    public function getspecialty() {return $this->specialty;}
    public function setspecialty($specialty) {$this->specialty = $specialty;}

    public static function all(){
        $sql = "SELECT mechanics.id, mechanics.name, sedes.sede, specialtys.specialty FROM `mechanics` INNER JOIN sedes ON mechanics.id_sedes = sedes.id INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $names = array();
        while ($fila = $resultado->fetch_assoc()) {
            $names[] = $fila;
        }
        return $names;
    }

    public static function find($id){
        $sql = "SELECT * FROM mechanics where id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $name[] = $fila;
        }
        return $name[0];
    }

    public static function update($id,$name, $specialty, $sede){
        $sql = "UPDATE `mechanics` SET `name`='$name', `id_specialty`='$specialty', `id_sedes`='$sede' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
    public static function delete($id){
        $sql = "DELETE FROM `mechanics` WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function store($name, $specialty, $sede){
        $sql = "INSERT INTO `mechanics`(`name`, `id_specialty`, `id_sedes`) VALUES ('$name', $specialty, $sede)";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>