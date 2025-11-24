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

    $registro=mysqli_query($conex,"update ficha set nom_ins_f='$_REQUEST[nom_n]' where id_f='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update ficha set num_f='$_REQUEST[num_n]' where id_f='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update ficha set num_apr_f='$_REQUEST[num_a_n]' where id_f='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    $registro=mysqli_query($conex,"update ficha set prog_f='$_REQUEST[prog_n]' where id_f='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    
    echo '<br><br><br><center><font face=tahoma color=orange><h2>REGISTRO DE LOS DATOS ACTUALIZADO<br><br>';
    ?>

    <br><br><br><br>
    <form method="post" action="Actualizar_1.php">
        <input type="submit" value="Menu Principal">
    </form>
    <br><br>
</body>
</html>