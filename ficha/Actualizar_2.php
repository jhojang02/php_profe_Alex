<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
</head>
<body>
    <?php
    require_once 'conexion.php';

    $registro=mysqli_query($conex,"select * from ficha where id_f='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));

    if ($reg = mysqli_fetch_array($registro)){
        ?>
    <center>
        <font face=tahoma size=2> <br><br>
         <form action="Actualizar_3.php" method="post" enctype="multipart/form-data">
            <table border=1 width=50% height=60%>
                <tr height="35%" bgcolor=lightgreen>
                    <th colspan=2>Datos a Actualizar</th>
                </tr>
                <td align=center>
                    <input type="hidden" name="cod" value="<?php echo $reg['ID_F']; ?>">
                    Actualizar nombre Instructor:<br>
                    <input type="text" name="nom_n" value="<?php echo $reg['NOM_INS_F']; ?>"><br>
                    <input type="hidden" name="nom_v" value="<?php echo $reg['NOM_INS_F']; ?>"><br>
                    Actualizar Contenido de la Competencia:<br>
                    <input type="text" name="num_n" value="<?php echo $reg['NUM_F']; ?>"><br>
                    <input type="hidden" name="num_v" value="<?php echo $reg['NUM_F']; ?>"><br>
                    Actualizar Resultado de la Competencia:<br>
                    <input type="text" name="num_a_n" value="<?php echo $reg['NUM_APR_F']; ?>"><br>
                    <input type="hidden" name="num_a_v" value="<?php echo $reg['NUM_APR_F']; ?>"><br>
                    Actualizar Programa de Formacion:<br>
                    <input type="text" name="prog_n" value="<?php echo $reg['PROG_F']; ?>"><br>
                    <input type="hidden" name="prog_v" value="<?php echo $reg['PROG_F']; ?>"><br>
                    
                    <input type="submit" value="Actualizar Datos">
                </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
    </font>
</center>
</body>
</html>