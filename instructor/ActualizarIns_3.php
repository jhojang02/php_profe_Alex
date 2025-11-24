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

    $registro=mysqli_query($conex,"update instructor set nom_ins='$_REQUEST[nom_n]' where id_ins='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update instructor set ape_ins='$_REQUEST[ape_n]' where id_ins='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update instructor set tdo_ins='$_REQUEST[tdo_n]' where id_ins='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update instructor set ndo_ins='$_REQUEST[ndo_n]' where id_ins='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update instructor set tel_ins='$_REQUEST[tel_n]' where id_ins='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));

    echo '<br><br><br><center><font face=tahoma color=orange><h2>REGISTRO DE LOS DATOS ACTUALIZADO<br><br>';
    ?>

    <br><br><br><br>
    <form method="post" action="ActualizarIns_1.php">
        <input type="submit" value="Menu Principal">
    </form>
    <br><br>
    <form method="post" action="ActualizarIns_4.php">
        <input type="submit" value="Actualizar Foto">
    </form>
</body>
</html>