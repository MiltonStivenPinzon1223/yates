<?php

//ruta del router
$folderPath = $_SERVER['SCRIPT_NAME'];

//ruta de peticion
$urlPath = $_SERVER['REQUEST_URI'];
$url = substr($urlPath, 11);

define('URL', $url);
