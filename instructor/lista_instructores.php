<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de los Aprendices</title>
</head>
<body>
    <center>
        <font face=tahoma>
            <table border=1 bordercolor=blue width=35%>
                <tr height=35px bgcolor=lightgreen>
                    <th colspan=7>LISTADO DE INSTRUCTORES</th>
                </tr>
                <tr height=35px>
                    <th>ID</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>TIPDOCUMENTO</th>
                    <th>DOCUMENTO</th>
                    <th>TELEFONO</th>
                    <th>FOTO</th>
                </tr>
                <?php
                //invocar la funcion de conexion
                require_once 'conexion.php';
                //invocar los registros de la tabla aprendiz
                $registro = mysqli_query($conex, 'select*from instructor') or die ("error".mysqli_error());
                //invocar al arreglo
                while ($reg = mysqli_fetch_array($registro)) {
                echo '<tr><th>'.$reg['ID_INS'].'</th>';
                echo '<th>'.$reg['NOM_INS']."</th>";
                echo '<th>'.$reg['APE_INS']."</th>";
                echo '<th>'.$reg['TDO_INS']."</th>";
                echo '<th>'.$reg['NDO_INS']."</th>";
                echo '<th>'.$reg['TEL_INS']."</th>";
                $ff = $reg['FOT_INS'];
                echo "<th><img src=\"$ff\" width=100 height=100></img></th>";
                echo "</tr>";
                }//cierre while

                echo '</table>';
                mysqli_close($conex)
                ?>
        </font>
    </center>
</body>
</html>