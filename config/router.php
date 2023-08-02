<?php

//ruta del router
$folderPath = $_SERVER['SCRIPT_NAME'];

//ruta de peticion
$urlPath = $_SERVER['REQUEST_URI'];
$url = substr($urlPath, 6);

define('URL', $url);
