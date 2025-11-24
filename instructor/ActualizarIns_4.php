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
    $registro=mysqli_query($conex,"select * from instructor where id_ins='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    ?>

    <?php
    while ($reg = mysqli_fetch_array($registro)){
        echo '<br>';
        echo '<br><br><br><center><font face=tahoma color=blue><h3>Actualizar Foto de '.$reg['NOM_INS'].' '.$reg['APE_INS'].'<br><br>';
    }
    ?>

    <center>
        <font face=arial color=green>
        <h3>
        INGRESE LA NUEVA FOTO:<br>
        </h3>
        <form action="ActualizarIns_5.php" method="post" enctype="multipart/form-data">
            <input type="file" name="foto">
            <input type="hidden" name="cod" value="<?php echo $_REQUEST['cod']; ?>">
            <br><br><br>
            <input type="submit" value="Actualizar Foto">
        </form>

        <form action="post" action="ActualizarIns_2.php">
            <input type="hidden" name="cod" value="<?php echo $_REQUEST['cod']; ?>">
            <input type="submit" value="Volver">
        </form>

        </font>
    </center>
</body>
</html>