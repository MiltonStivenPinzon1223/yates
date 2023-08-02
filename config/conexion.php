<?php

$host = "localhost";
$database = "biblioteca";
$username = "root";
$password = "";

$db = new mysqli($host, $username, $password, $database);

if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}