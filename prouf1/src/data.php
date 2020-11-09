<?php

ini_set('display_errors','On');
include 'config.php';
require  'src/connect.php';

$db=connectMysql($dbname,$userdb,$passdb);
$nombre= filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
$contraseña= filter_input(INPUT_POST,"passwd",FILTER_SANITIZE_SPECIAL_CHARS);
$login= LoginSchema($db, $nombre, $contraseña);

if($login != NULL){
    header("Location:?url=panelusuario");
    if(!isset($_SESSION['username'])){ //si no existe crealo
        $_SESSION['username']=$nombre; //asignale el valor de nombre
    }     
}else{
    echo "Usuario y contraseña no encontrados,vuelva a intentarlo";
}

?>