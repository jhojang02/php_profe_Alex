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

    $registro=mysqli_query($conex,"update aprendiz set nom_apr='$_REQUEST[nom_n]' where id_apr='$_REQUEST[cod]'") or die("error ".mysqli_error($conex));
    ?>
</body>
</html>