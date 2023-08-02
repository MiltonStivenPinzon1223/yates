<?php

class conexion{
    private $host;
    private $database ;
    private $username;
    private $password;
    //variable de estado
    private $conexion;

    function __construct()
    {
        $this->host = "localhost";
        $this->database = "yates";
        $this->username = "root";
        $this->password = "";
    }

    public function conect() {
        $this->conexion = new mysqli($this->host, $this->database, $this->username, $this->password);
        if ($this->conexion->connect_error) {
            die("Error de base de datos: ".$this->conexion->connect_error);
        }
    }

    public function close(){
        $this->conexion->close();
    }

    public function query($sql){ 
        $this->conexion->query($sql);
    }
}