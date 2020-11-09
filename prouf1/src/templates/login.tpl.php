<?php include 'src/templates/header.tpl.php';
?>
<form action="data.php" method="GET">
    
    <label>INTRODUZCA SU NOMBRE </label><br><input type="text" value="name"></input><br>

    <label>INTRODUZCA SU CONTRASEÑA</label><br><input type="passwd" value="passwd"></input><br>
    <input type="submit" value=Envia>
</form>

<?php include 'src/templates/footer.tpl.php'; ?>
