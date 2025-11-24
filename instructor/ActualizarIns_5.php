<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'conexion.php';
    $uploadDir = 'imagenes_instructor/';
    if(isset($_FILES['foto']['name']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK){
        //Validar y mover el archivo

        move_uploaded_file($_FILES['foto']['tmp_name'], 'imagenes_instructor/'.$_FILES['foto']['name']);
        $nomf = 'imagenes_instructor/'.$_FILES['foto']['name'];
    }
    $registro=mysqli_query($conex,"update instructor set fot_ins='$nomf' where id_ins='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));

    if($registro){
    echo '<br><br><br><center><font face=tahoma color=orange><h2>Foto Actualizada Exitosamente<br><br>';
    } else {
        echo '<br><center><font face=tahoma color=purple><h2>FOTO NO ACTUALIZADA<br><br>';
    }

?>

<form method="post" action="ActualizarIns_1.php">
    <input type="hidden" name="cod" value="<?php echo $_REQUEST['cod']; ?>">
    <input type="submit" value="Volver">
</form>
</body>
</html>