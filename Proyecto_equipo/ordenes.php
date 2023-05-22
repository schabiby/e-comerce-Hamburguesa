<?php
include 'include/header.php';
include 'conexionDB.php';

/*Interfaz hecha por Arely Mejía Arreloa */

session_start();

$nombre = $_SESSION["NombreLogedIn"];
?>
<title>Tabla de órdenes</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        background: white;
        width: 60%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
</head>

<body>
    <br><br><br><br><br>
    <br><br><br>
    <h2 style="color:white">Historial de pedidos de
        <?php echo $nombre; ?>
    </h2>

    <?php
    $user = mysqli_query($db, "SELECT ID_Cliente from clientes where nombre = '$nombre'");
    if (mysqli_num_rows($user) == 1) {
        $fila2 = mysqli_fetch_assoc($user);
        $iduser = $fila2["ID_Cliente"];
    }
    $sql = "SELECT * FROM ordenes where ID_Cliente = $iduser";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los registros en una tabla
        echo "<table>";
        echo "<tr><th>ID_Orden</th><th>Fecha</th><th>Total</th><th>Método de Pago</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ID_Orden"] . "</td>";
            echo "<td>" . $row["Fecha"] . "</td>";
            echo "<td>" . $row["Total"] . "</td>";
            echo "<td>" . $row["MetodoPago"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros.";
    }

    ?>

    <div class="container" style="text-align: right">
        <button type="submit" name="logout" class="btn btn-secondary" onclick="volver()">Volver</button>
    </div>

    <script>
        function volver(){
            window.location.href = "catalogo.php";
        }
    </script>
    <?php

    include 'include/footer.php';

    ?>