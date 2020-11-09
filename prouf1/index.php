<?php
//activació d'errors
ini_set('display_errors','On');
//configuración entorno
session_start();
define ('APP',__DIR__); //dir define la ruta actual
require APP.'/src/route.php';
//enrutamiento
$controller=getRoute();

//redirigir a ruta capturada
require APP.'/controllers/'.$controller.'.php';
