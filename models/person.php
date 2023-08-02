<?php
require 'config/conexion.php';

class person{
    public name;
    protected email;
    protected password;
    public age;
    protected rol;

    public function __construct($name, $email, $password, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
        $this->rol = 1;
    }

    //=======GETTERS Y SETTERS
    public function getName() {return $this->name;}
    public function setName($name) {$this->name = $name;}
    public function getEmail() {return $this->email;}
    public function setEmail($email) {$this->email = $email;}
    public function getPassword() {return $this->password;}
    public function setPassword($password) {$this->password = $password;}
    public function getAge() {return $this->age;}
    public function setAge($age) {$this->age = $age;}
    public function getRol() {return $this->rol;}
    public function setRol($rol) {$this->rol = $rol;}

    function register($name, $email, $password, $age){
        $query = "INSERT INTO usuarios (name, email, password, age, rol) VALUES ('$name', '$email', '$password', '$age', '$rol')";
        if ($this->db->query($query)) {
            return header('location: ../resources/views/home.php');
        } else {
            error_log("Error al registrar usuario: " . $this->db->error);
            return false;
        }
    }
}

?>