<?php
// Establecer conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "proyectofinal";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Consultar productos desde la base de datos
$sql = "SELECT * FROM catalogo";
$result = mysqli_query($conn, $sql);

$products = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $product = array(
            'id' => $row['ID_Producto'],
            'name' => $row['Descripción'],
            'price' => $row['Costo'],
            'url' => $row['RutaImagen']
        );
        $products[] = $product;
    }
}

mysqli_close($conn);

// Enviar la lista de productos como respuesta
header('Content-Type: application/json');
echo json_encode($products);
?>