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

    $registro=mysqli_query($conex,'select * from ficha') or die("error ".mysqli_error($conex));

    while ($reg=mysqli_fetch_array($registro)) {
        echo "<center>Id: " .$reg['ID_F']."<br>";
        echo "Nombre Instructor: ".$reg['NOM_INS_F']."<br>";
        echo "Contenido: "  .$reg['NUM_F']."<br>";
        echo "Resultados: ".$reg['NUM_APR_F']."<br>";
        echo "Programa: "  .$reg['PROG_F']."<br>";
        echo "<hr width=50%>";
    }
    mysqli_close($conex);
    ?>

    <form action="Actualizar_2.php" method="post">
        <font color=blue>
        Ingrese el codigo de la ficha a actualizar:<br><br>
        <input type="text" name="cod" size=5><br><br>
        <input type="submit" value="buscar">
        </font>
    </form>
    </font>
</body>
</html>