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

    $registro=mysqli_query($conex,"update competencia set nom_com='$_REQUEST[nom_n]' where id_com='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update competencia set cont_com='$_REQUEST[cont_n]' where id_com='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update competencia set resu_com='$_REQUEST[resu_n]' where id_com='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update competencia set prog_com='$_REQUEST[prog_n]' where id_com='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    
    echo '<br><br><br><center><font face=tahoma color=orange><h2>REGISTRO DE LOS DATOS ACTUALIZADO<br><br>';
    ?>

    <br><br><br><br>
    <form method="post" action="Actualizar_1.php">
        <input type="submit" value="Menu Principal">
    </form>
    <br><br>
</body>
</html>