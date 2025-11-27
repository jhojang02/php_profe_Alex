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

    $registro=mysqli_query($conex,'select * from instructor') or die("error ".mysqli_error($conex));

    while ($reg=mysqli_fetch_array($registro)) {
        echo "<center>Id: " .$reg['ID_INS']."<br>";
        echo "Nombre: "     .$reg['NOM_INS']."<br>";
        echo "Apellido: "   .$reg['APE_INS']."<br>";
        echo "Tipo de Doc: ".$reg['TDO_INS']."<br>";
        echo "Documento: "  .$reg['NDO_INS']."<br>";
        echo "Telefono: "   .$reg['TEL_INS']."<br>";
        $ff=$reg['FOT_INS'];
        echo "<img src=\"$ff\" width='100' height='100'>";
        echo "<hr width=50%>";
    }
    mysqli_close($conex);
    ?>
    <center>
    <form action="ActualizarIns_2.php" method="post">
        <font color=blue>
        Ingrese el codigo del Usuario a actualizar:<br><br>
        <input type="text" name="cod" size=5><br><br>
        <input type="submit" value="buscar">
        <br><br>
        </form>
        <form action="./Instructor.html" method="post">
        <input type="submit" value="Ir al Menu Principal">
        </form>
        </font>
        </font>
        </center>
</body>
</html>