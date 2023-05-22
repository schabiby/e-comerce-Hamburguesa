<?php

include 'conexionDB.php';

session_start();

$Total = $_POST['total'];
$Nombre = $_SESSION["NombreLogedIn"];

$user = mysqli_query($db, "SELECT ID_Cliente from clientes where nombre = '$Nombre'");
if (mysqli_num_rows($user) == 1) {
    $fila2 = mysqli_fetch_assoc($user);
    $iduser = $fila2["ID_Cliente"];
}
$sql = "INSERT INTO ordenes (ID_Cliente, Fecha, Total, MetodoPago) VALUES ($iduser, DEFAULT, $Total, DEFAULT)";

mysqli_query($db, $sql);
?>