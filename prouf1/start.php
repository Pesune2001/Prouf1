<?php
//como conectarse y a que base conectarse y la otra que le metes
include 'config.php';
require 'src/connect.php';

$db=connectMysql($dbhost,$dbname,$dbuser,$dbpass);
$sql=file_get_contents('prouf1.sql');
try{
    $db->exec($sql);
}catch(PDOException $e)
{
    die($e->getMessage());
}