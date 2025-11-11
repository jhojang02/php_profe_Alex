<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <font face=tahoma></font>
    <?php
    require_once 'conexion.php';

    $registro = mysqli_query($conex,"select * from aprendiz where id_apr = '$_REQUEST[cod]'") or die ("error".mysqli_error($conex));

    if ($reg=mysqli_fetch_array($registro)){
        echo '<br><br><br><center><font face=tahoma><table width=30% border=1 cellspacing=0><tr><th>';
        echo 'Ficha Tecnica del Aprendiz<br><br>';
        echo 'Id: '.$reg['ID_APR'].'<br>';
        echo 'Nombre: '.$reg['NOM_APR'].'<br>';
        echo 'Apellido: '.$reg['APE_APR'].'<br>';
        echo 'Tip Doc: '.$reg['TDO_APR'].'<br>';
        echo 'Documento: '.$reg['NDO_APR'].'<br>';
        echo 'Telefono: '.$reg['TEL_APR'].'<br>';

        $ff=$reg['FOT_APR'];
        echo "<br><br><img src=\"$ff\" width=200 height=200></img>";
        echo '</th></tr></table>';
        echo '<br><br><center><form action="consultar_aprendiz.html" method="post"><input type="submit" value="Ir al Menu Principal"></form></center>';
    }else{
        echo '<center><h3><font color=red>El registro del aprendiz No Existe';
    }
    mysqli_close($conex);
    ?>
</body>
</html>