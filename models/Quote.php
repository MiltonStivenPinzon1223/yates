<?php

class Quote{
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
        $sql = "SELECT quotes.*, specialtys.specialty, users.name as user FROM `quotes` INNER JOIN mechanics ON quotes.id_mechanics = mechanics.id INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id INNER JOIN users ON quotes.id_users = users.id;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $names = array();
        while ($fila = $resultado->fetch_assoc()) {
            $names[] = $fila;
        }
        return $names;
    }

    public static function find($correo){
        $conexion = new conexion();
        $conexion->conect();
        $sql = "SELECT id FROM users WHERE email = '$correo'";
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $user[] = $fila;
        }
        $sql2 = "SELECT quotes.*, specialtys.specialty, users.name as user FROM `quotes` INNER JOIN mechanics ON quotes.id_mechanics = mechanics.id INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id INNER JOIN users ON quotes.id_users = users.id where quotes.id_users =".$user[0]['id'].";";
        return $sql2;
        $resultado = $conexion->query($sql2);
        while ($fila = $resultado->fetch_assoc()) {
            $name[] = $fila;
        }
        return $name[0];
    }

    public static function update($id,$name, $specialty, $sede){
        $sql = "UPDATE `quotes` SET `name`='$name', `id_specialty`='$specialty', `id_sedes`='$sede' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
    public static function delete($id){
        $sql = "DELETE FROM `quotes` WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function store($name, $specialty, $sede){
        $sql = "INSERT INTO `quotes`(`name`, `id_specialty`, `id_sedes`) VALUES ('$name', $specialty, $sede)";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>