<?php
//llamado a la funcion de conexion
require_once 'conexion.php';

//mostrar los registros de la tabla datos de acuerdo al control
$registro = mysqli_query($conex, "select * from competencia where id_com = '$_REQUEST[cod]'") 
or die("error" . mysqli_error($conex));

if($reg = mysqli_fetch_array($registro)){
    mysqli_query($conex, "delete from competencia where id_com = '$_REQUEST[cod]'") 
    or die("error" . mysqli_error($conex));
    echo '<br><br><br><center><font face=tahoma color=green size=4><b>REGISTRO ELIMINADO<br>';
}
else{
    echo '<br><br><br><center><font face=tahoma color=red size=4><b>REGISTRO NO ENCONTRADO<br>';
}

mysqli_close($conex);
?>
    <br><br>
    <center>
    <form action="Registro_borrado_Competencia.php
    " method="post">
        <input type="submit" value="Ir al Menu Principal">
    </form>
    </center>
