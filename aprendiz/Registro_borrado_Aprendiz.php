<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Aprendiz</title>
</head>
<body>
    <center>
        <font face=tahoma>
            <table border=1 bordercolor=blue width=35%>
                <tr height=35px bgcolor=lightgreen>
                    <th colspan=7>LISTADO DE APRENCICES</th>
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
                $registro = mysqli_query($conex, 'select*from aprendiz') or die ("error".mysqli_error());
                //invocar al arreglo
                while ($reg = mysqli_fetch_array($registro)) {
                echo '<tr><th>'.$reg['ID_APR'].'</th>';
                echo '<th>'.$reg['NOM_APR']."</th>";
                echo '<th>'.$reg['APE_APR']."</th>";
                echo '<th>'.$reg['TDO_APR']."</th>";
                echo '<th>'.$reg['NDO_APR']."</th>";
                echo '<th>'.$reg['TEL_APR']."</th>";
                $ff = $reg['FOT_APR'];
                echo "<th><img src=\"$ff\" width=100 height=100></img></th>";
                echo "</tr>";
                }//cierre while

                echo '</table>';
                mysqli_close($conex)
                ?>
                <br>
        </font>
    <form action="RegistroBorrado.php" method="post">
    <b style="color:red">Ingrese el Codigo del aprendiz a Borrar:
    <br><br>
    <input type="text" name="cod" size="5"><br><br>
    <input type="submit" value="Borrar Aprendiz">
    </form>
    </center>
    <br><br>
    <center>
    <form action="Registro_borrado_Aprendiz.php
    " method="post">
        <input type="submit" value="Ir al Menu Principal">
    </form>
    </center>

</body>
</html>