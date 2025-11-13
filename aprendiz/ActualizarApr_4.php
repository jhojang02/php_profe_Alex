<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
</head>
<body>
    <?php
    require_once 'conexion.php';
    $registro=mysqli_query($conex,"select * from aprendiz where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    ?>

    <?php
    while ($reg = mysqli_fetch_array($registro)){
        echo "<br>";
        echo "<br><br><br><center><font face=tahoma color=blue><h3>Actualizar Foto de '$reg['NOM_APR']'</h3>";
    ?>
</body>
</html>