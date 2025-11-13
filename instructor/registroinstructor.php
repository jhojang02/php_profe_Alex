<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Registrados Aprendiz</title>
</head>
<body>
<?php

//Conexion con la base de Datos
require_once 'Conexion.php';

//Adicionar un archivo o imagen de tipo gif, jpg, png, pdf, doc
move_uploaded_file($_FILES['foto']['tmp_name'], 'imagenes_instructor/' . $_FILES['foto']['name']);
$nomf = 'imagenes_instructor/' . $_FILES['foto']['name'];

//insertar registro en la tabla aprendiz
mysqli_query($conex, "insert into instructor(NOM_INS, APE_INS, TDO_INS, NDO_INS, TEL_INS, FOT_INS) values 
('$_REQUEST[nom]', '$_REQUEST[ape]', '$_REQUEST[tdo]', '$_REQUEST[ndo]', '$_REQUEST[tel]', '$nomf')") 
or die("error " . mysqli_error($conex));

echo '<br><br><center><h3>Datos Agregados Correctamente</h3>';

$resultado = mysqli_query($conex, "SELECT * FROM instructor");
?>

<center>
    <h1><font face=arial color=black>Tabla Instructores</h1>
        <table border="1" bordercolor="black" width="680" height="420" align="center" display="flex">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo Doc</th>
                <th>Numero Doc</th>
                <th>Telefono</th>
                <th>Foto</th>
            </tr>
<?php
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['NOM_INS']."</td>";
    echo "<td>".$fila['APE_INS']."</td>";
    echo "<td>".$fila['TDO_INS']."</td>";
    echo "<td>".$fila['NDO_INS']."</td>";
    echo "<td>".$fila['TEL_INS']."</td>";
    echo "<td><img src='".$fila['FOT_INS']."' width='80' height='80'></td>";
    echo "</tr>";
}
?>
        </table>
</center>
<?php
//desconectar mysql de php
mysqli_close($conex);

?>
</body>
</html>