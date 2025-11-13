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

    if(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES['foto']['tmp_name'], 'imagenes/' . $_FILES['foto']['name']);
        $nomf = 'imagenes/' . $_FILES['foto']['name'];
    
    }

    $registro=mysqli_query($conex,"select * from aprendiz where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));

    if ($reg = mysqli_fetch_array($registro)){
        ?>
    <center>
        <font face=tahoma size=2> <br><br>
         <form action="ActualizarApr_3.php" method="post" enctype="multipart/form-data">
            <table border=1 width=50% height=60%>
                <tr height="35%" bgcolor=lightgreen>
                    <th colspan=2>Datos a Actualizar</th>
                </tr>
                <td align=center>
                    <input type="hidden" name="cod" value="<?php echo $reg['ID_APR']; ?>">
                    Actualizar nombre:<br>
                    <input type="text" name="nom_n" value="<?php echo $reg['NOM_APR']; ?>"><br>
                    <input type="hidden" name="nom_v" value="<?php echo $reg['NOM_APR']; ?>"><br>
                    Actualizar apellido:<br>
                    <input type="text" name="ape_n" value="<?php echo $reg['APE_APR']; ?>"><br>
                    <input type="hidden" name="ape_v" value="<?php echo $reg['APE_APR']; ?>"><br>
                    Actualizar tipo de Documento:<br>
                    <input type="text" name="tdo_n" value="<?php echo $reg['TDO_APR']; ?>"><br>
                    <input type="hidden" name="tdo_v" value="<?php echo $reg['TDO_APR']; ?>"><br>
                    Actualizar numero de Documento:<br>
                    <input type="text" name="ndo_n" value="<?php echo $reg['NDO_APR']; ?>"><br>
                    <input type="hidden" name="ndo_v" value="<?php echo $reg['NDO_APR']; ?>"><br>
                    Actualizar telefono:<br>
                    <input type="text" name="tel_n" value="<?php echo $reg['TEL_APR']; ?>"><br>
                    <input type="hidden" name="tel_v" value="<?php echo $reg['TEL_APR']; ?>"><br>
                    
                    <input type="submit" value="Actualizar Datos">
                </td>
            </form>
        
        <?php
        $$ff = $reg['FOT_APR'];
        echo "<td><center><img src=\"$ff\" width='150' height='150'></img>";
        }
        else 
            echo "<br><br><br><center><font face=tahoma color=blue><h2>No existe ese nombre";

        mysqli_close($conex);
        ?>
            <br><br/>
            <form action="ActualizarApr_4.php">
                <input type="hidden" name="cod" value="<?php echo $_REQUEST['cod']; ?>">
                <input type="submit" value="Actualizar Foto">
                    </td>
                </tr>
            </table>
        </form>
    </font>
</center>
</body>
</html>