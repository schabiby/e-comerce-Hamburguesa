<?php 

include("conexion.php");


$nombre = $_POST['Nombre'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$direccion = $_POST['Direccion'];


$usuarios = "INSERT INTO clientes VALUES(NULL,'$nombre','$email',$telefono,'$direccion')";
$res = mysqli_query($conexion, $usuarios);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <h1>Alta de <?php echo $nombre ?> exitosa</h1>
    
</body>
</html>
