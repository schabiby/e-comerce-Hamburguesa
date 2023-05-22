<?php

$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nameDB = "proyectofinal";

$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nameDB);
if (!$db) {
    die("La conexión falló: " . mysqli_connect_error());
} else {
    mysqli_query($db, "SET NAMES 'UTF8'");
}

?>