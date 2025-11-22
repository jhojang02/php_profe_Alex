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

    $registro=mysqli_query($conex,"update aprendiz set nom_apr='$_REQUEST[nom_n]' where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update aprendiz set ape_apr='$_REQUEST[ape_n]' where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update aprendiz set tdo_apr='$_REQUEST[tdo_n]' where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update aprendiz set ndo_apr='$_REQUEST[ndo_n]' where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update aprendiz set tel_apr='$_REQUEST[tel_n]' where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));

    echo '<br><br><br><center><font face=tahoma color=orange><h2>REGISTRO DE LOS DATOS ACTUALIZADO<br><br>';
    ?>

    <br><br><br><br>
    <form method="post" action="ActualizarApr_1.php">
        <input type="submit" value="Menu Principal">
    </form>
    <br><br>
    <form method="post" action="ActualizarApr_4.php">
        <input type="submit" value="Actualizar Foto">
    </form>
</body>
</html>