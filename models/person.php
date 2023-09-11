<?php
include_once "config/conexion.php";

class Person{
    public $name;
    protected $email;
    protected $password;
    protected $rol;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->rol = 1;
    }

    //=======GETTERS Y SETTERS
    public function getName() {return $this->name;}
    public function setName($name) {$this->name = $name;}
    public function getEmail() {return $this->email;}
    public function setEmail($email) {$this->email = $email;}
    public function getPassword() {return $this->password;}
    public function setPassword($password) {$this->password = $password;}
    public function getRol() {return $this->rol;}
    public function setRol($rol) {$this->rol = $rol;}

    public function register($name, $email, $password, $document){
        $conexion = new conexion();
        $conexion->conect();
        $sql = "INSERT INTO `users`(`name`, `document`, `email`, `password`, `id_type_documents`, `id_rols`) VALUES ('$name', '$document', '$email', '$password', 1, 1)";
        $resultado = $conexion->query($sql);
        if ($resultado > 0) {
            $conexion->close();
            return true;
        }else{
            return $resultado;
        }
    }

    public static function getUser($email, $password) {
        $conexion = new conexion();
        $conexion->conect();
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $resultado = $conexion->query($sql);
        if ($resultado != null) {
            $conexion->close();
            while ($fila = $resultado->fetch_assoc()) {
                $user[] = $fila;
            }
            return $user[0];
        }else{
            die("Error  ");
        }
    }

    public static function find($id) {
        $conexion = new conexion();
        $conexion->conect();
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $resultado = $conexion->query($sql);
        if ($resultado != null) {
            $conexion->close();
            while ($fila = $resultado->fetch_assoc()) {
                $user[] = $fila;
            }
            return $user[0];
        }else{
            die("Error  ");
        }
    }

    public static function update($id,$name, $type_document, $document, $email){
        $sql = "UPDATE `users` SET `name`='$name', `id_type_documents`='$type_document', `document`='$document', `email`='$email' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public static function updateStatus($id,$status){
        $sql = "UPDATE `users` SET status=$status WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }


    public static function all(){
        $sql = "SELECT users.*, type_documents.type FROM `users` JOIN type_documents ON users.id_type_documents = type_documents.id WHERE id_rols = 1";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $users = array();
        while ($fila = $resultado->fetch_assoc()) {
            $users[] = $fila;
        }
        return $users;
    }
}

?>