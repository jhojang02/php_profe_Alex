<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
</head>
<body>
    <font face=tahoma>
    <?php 
    require_once 'conexion.php';

    $registro=mysqli_query($conex,'select * from aprendiz') or die("error ".mysqli_error($conex));

    while ($reg=mysqli_fetch_array($registro)) {
        echo "<center>Id: " .$reg['ID_APR']."<br>";
        echo "Nombre: "     .$reg['NOM_APR']."<br>";
        echo "Apellido: "   .$reg['APE_APR']."<br>";
        echo "Tipo de Doc: ".$reg['TDO_APR']."<br>";
        echo "Documento: "  .$reg['NDO_APR']."<br>";
        echo "Telefono: "   .$reg['TEL_APR']."<br>";
        $ff=$reg['FOT_APR'];
        echo "<img src=\"$ff\" width='100' height='100'>";
        echo "<hr width=50%>";
    }
    mysqli_close($conex);
    ?>

    <form action="ActualizarApr_2.php" method="post">
        <font color=blue>
        Ingrese el codigo del Usuario a actualizar:<br><br>
        <input type="text" name="cod" size=5><br><br>
        <input type="submit" value="buscar">
        </font>
    </form>
    </font>
</body>
</html>