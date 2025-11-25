<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Registrados Competencia</title>
</head>
<body>
<?php

//Conexion con la base de Datos
require_once 'Conexion.php';

//insertar registro en la tabla aprendiz
mysqli_query($conex, "insert into competencia(NOM_COM, CONT_COM, RESU_COM, PROG_COM) values 
('$_REQUEST[nom]', '$_REQUEST[cont]', '$_REQUEST[numres]', '$_REQUEST[prog]')") 
or die("error " . mysqli_error($conex));

echo '<br><br><center><h3>Datos Agregados Correctamente</h3>';

$resultado = mysqli_query($conex, "SELECT * FROM competencia");
?>

<center>
    <h1><font face=arial color=black>Tabla Competencia</h1>
        <table border="1" bordercolor="black" width="680" height="420" align="center" display="flex">
            <tr>
                <th>Nombre instructor</th>
                <th>Contenido</th>
                <th>Numero de Resultados</th>
                <th>Programa</th>
            </tr>
<?php
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['NOM_COM']."</td>";
    echo "<td>".$fila['CONT_COM']."</td>";
    echo "<td>".$fila['RESU_COM']."</td>";
    echo "<td>".$fila['PROG_COM']."</td>";
    echo "</tr>";
}
?>
<form action="datos_competencia.html" method="post">
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