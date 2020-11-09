<?php
include 'src/templates/header.tpl.php';
?>
<main><h1><?= $title; ?></h1></main>


    <label> AQUÍ INICIE LA SESIÓN: </label><br>
    <a href='?url=login'><button type="text">Inicia sesión</button></a><br>

    <label> SI NO ESTÁ REGISTRADO, HAGALO AQUÍ:</label><br>
    <a href='?url=register'><button type="text">Registro</button></a>


<?php include 'src/templates/footer.tpl.php';?>

