<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de las Fichas</title>
</head>
<body>
    <center>
        <font face=tahoma>
            <table border=1 bordercolor=blue width=35%>
                <tr height=35px bgcolor=lightgreen>
                    <th colspan=7>LISTADO DE FICHAS</th>
                </tr>
                <tr height=35px>
                    <th>ID</th>
                    <th>NOMBRES INSTRUCTORES</th>
                    <th>FICHAS</th>
                    <th>NUMERO DE APRENDICES</th>
                    <th>PROGRAMA</th>
                </tr>
                <?php
                //invocar la funcion de conexion
                require_once 'conexion.php';
                //invocar los registros de la tabla aprendiz
                $registro = mysqli_query($conex, 'select*from ficha') or die ("error".mysqli_error());
                //invocar al arreglo
                while ($reg = mysqli_fetch_array($registro)) {
                echo '<tr><th>'.$reg['ID_F'].'</th>';
                echo '<th>'.$reg['NOM_INS_F']."</th>";
                echo '<th>'.$reg['NUM_F']."</th>";
                echo '<th>'.$reg['NUM_APR_F']."</th>";
                echo '<th>'.$reg['PROG_F']."</th>";
                echo "</tr>";
                }//cierre while

                echo '</table>';
                mysqli_close($conex)
                ?>
        </font>
    </center><br><br>
    <center>
    <form action="Ficha.html" method="post">
        <input type="submit" value="Ir al Menu Principal">
    </form>
    </center>
</body>
</html>