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
        }
    }
}

?>