<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Registrados Ficha</title>
</head>
<body>
<?php

//Conexion con la base de Datos
require_once 'Conexion.php';

//insertar registro en la tabla aprendiz
mysqli_query($conex, "insert into ficha(NOM_INS_F, NUM_F, NUM_APR_F, PROG_F) values 
('$_REQUEST[nom]', '$_REQUEST[num]', '$_REQUEST[num_a]', '$_REQUEST[prog]')") 
or die("error " . mysqli_error($conex));

echo '<br><br><center><h3>Datos Agregados Correctamente</h3>';

$resultado = mysqli_query($conex, "SELECT * FROM ficha");
?>

<center>
    <h1><font face=arial color=black>Tabla Competencia</h1>
        <table border="1" bordercolor="black" width="680" height="420" align="center" display="flex">
            <tr>
                <th>Nombre instructor</th>
                <th>Numero de Ficha</th>
                <th>Numero de Aprendices</th>
                <th>Programa de Formacion</th>
            </tr>
<?php
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['NOM_INS_F']."</td>";
    echo "<td>".$fila['NUM_F']."</td>";
    echo "<td>".$fila['NUM_APR_F']."</td>";
    echo "<td>".$fila['PROG_F']."</td>";
    echo "</tr>";
}
?>
<form action="datos_ficha.html" method="post">
    <input type="submit" value="Volver">
</form>
        </table>
</center>
<?php
//desconectar mysql de php
mysqli_close($conex);

?>
</body>
</html>