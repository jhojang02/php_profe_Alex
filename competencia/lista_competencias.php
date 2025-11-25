<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de las Competencias</title>
</head>
<body>
    <center>
        <font face=tahoma>
            <table border=1 bordercolor=blue width=35%>
                <tr height=35px bgcolor=lightgreen>
                    <th colspan=7>LISTADO DE COMPETENCIAS</th>
                </tr>
                <tr height=35px>
                  <th>ID</th>
                    <th>NOMBRES INSTRUCTORES</th>
                    <th>CONTENIDOS</th>
                    <th>RESULTADOS</th>
                    <th>PROGRAMA</th>
                </tr>
                <?php
                //invocar la funcion de conexion
                require_once 'conexion.php';
                //invocar los registros de la tabla aprendiz
                $registro = mysqli_query($conex, 'select*from competencia') or die ("error".mysqli_error());
                //invocar al arreglo
                while ($reg = mysqli_fetch_array($registro)) {
                echo '<tr><th>'.$reg['ID_COM'].'</th>';
                echo '<th>'.$reg['NOM_COM']."</th>";
                echo '<th>'.$reg['CONT_COM']."</th>";
                echo '<th>'.$reg['RESU_COM']."</th>";
                echo '<th>'.$reg['PROG_COM']."</th>";
                echo "</tr>";
                }//cierre while

                echo '</table>';
                mysqli_close($conex)
                ?>
        </font>
    </center>
    <br><br>
    <center>
    <form action="Competencia.html" method="post">
        <input type="submit" value="Ir al Menu Principal">
    </form>
    </center>
</body>
</html>