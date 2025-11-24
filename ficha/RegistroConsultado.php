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

    $registro = mysqli_query($conex,"select * from ficha where id_f = '$_REQUEST[cod]'") or die ("error".mysqli_error($conex));

    if ($reg=mysqli_fetch_array($registro)){
        echo '<br><br><br><center><font face=tahoma><table width=30% border=1 cellspacing=0><tr><th>';
        echo 'Fichas<br><br>';
        echo 'Id: '.$reg['ID_F'].'<br>';
        echo 'Nombre Instructor: '.$reg['NOM_INS_F'].'<br>';
        echo 'Numero de Ficha:   '.$reg['NUM_F'].'<br>';
        echo 'Numero de Aprendices:'.$reg['NUM_APR_F'].'<br>';
        echo 'Programa de Formacion: '.$reg['PROG_F'].'<br>';
        echo '</th></tr></table>';
        echo '<br><br><center><form action="consultar_ficha.html" method="post"><input type="submit" value="Ir al Menu Principal"></form></center>';
    }else{
        echo '<center><h3><font color=red>El registro de la Ficha No Existe';
    }
    mysqli_close($conex);
    ?>
</body>
</html>