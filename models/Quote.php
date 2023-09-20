<?php

class Quote{
    public $date;
    public $hour;
    public $specialty;
    public $sede;

    public function __construct($date,$specialty, $sede,$hour){
        $this->date = $date;
        $this->hour = $hour;
        $this->specialty = $specialty;
        $this->sede = $sede;
    }

    //=======GETTERS Y SETTERS
    public function getdate() {return $this->date;}
    public function setdate($date) {$this->date = $date;}
    public function gethour() {return $this->hour;}
    public function sethour($hour) {$this->hour = $hour;}
    public function getsede() {return $this->sede;}
    public function setsede($sede) {$this->sede = $sede;}
    public function getspecialty() {return $this->specialty;}
    public function setspecialty($specialty) {$this->specialty = $specialty;}

    public static function all(){
        session_start();
        $id_rols = $_SESSION['id_rols'];
        $email = $_SESSION['email'];
        $conexion = new conexion();
        $conexion->conect();
        if ($id_rols  == 2) {
            $sql2 = "SELECT quotes.*, specialtys.specialty, users.name as user FROM `quotes` INNER JOIN mechanics ON quotes.id_mechanics = mechanics.id INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id INNER JOIN users ON quotes.id_users = users.id";
            $resultado = $conexion->query($sql2);
            while ($fila = $resultado->fetch_assoc()) {
                $date[] = $fila;
            }
        }else{
            $sql = "SELECT id FROM users WHERE email = '$email'";
            $resultado = $conexion->query($sql);
            while ($fila = $resultado->fetch_assoc()) {
                $user[] = $fila;
            }
            $sql2 = "SELECT quotes.*, specialtys.specialty, users.name as user FROM `quotes` INNER JOIN mechanics ON quotes.id_mechanics = mechanics.id INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id INNER JOIN users ON quotes.id_users = users.id where quotes.id_users =".$user[0]['id'].";";
            $resultado = $conexion->query($sql2);
            while ($fila = $resultado->fetch_assoc()) {
                $date[] = $fila;
            }
        }
        return $date;
    }

    public static function find($id){
        $conexion = new conexion();
        $conexion->conect();
            $sql2 = "SELECT quotes.*, specialtys.specialty, users.name as user FROM `quotes` INNER JOIN mechanics ON quotes.id_mechanics = mechanics.id INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id INNER JOIN users ON quotes.id_users = users.id where quotes.id =$id";
            $resultado = $conexion->query($sql2);
            while ($fila = $resultado->fetch_assoc()) {
                $date[] = $fila;
            }
            return $date[0];
    }

    public static function update($id,$date,$hour, $specialty, $sede, $id_users){
        $conexion = new conexion();
        $conexion->conect();
        $sql = "SELECT id FROM  mechanics WHERE id_specialty = $specialty AND id_sedes = $sede";
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $mechanics[] = $fila['id'];
        }
        $mechanic = array_rand($mechanics,1);
        $sql2 = "UPDATE `quotes` SET `date`='$date', `hour`='$hour', `id_mechanics`=".$mechanics[$mechanic].", `id_users`=$id_users WHERE id = $id";
        $resultado = $conexion->query($sql2);
        return $resultado;
    }
    public static function delete($id){
        $sql = "DELETE FROM `quotes` WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function store($date,$hour, $specialty, $sede){
        session_start();
        $id = $_SESSION['id'];
        $conexion = new conexion();
        $conexion->conect();
        $sql = "SELECT id FROM  mechanics WHERE id_specialty = $specialty AND id_sedes = $sede";
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $mechanics[] = $fila['id'];
        }
        $mechanic = array_rand($mechanics,1);
        $sql = "INSERT INTO `quotes`(`date`, `hour`, `id_mechanics`, `id_users`) VALUES ('$date','$hour',". $mechanics[$mechanic].", $id)";
        $resultado = $conexion->query($sql);
        return $resultado;
    }
}

?>