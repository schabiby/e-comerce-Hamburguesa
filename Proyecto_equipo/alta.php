<?php

include("conexion.php");
$usuarios = "SELECT * FROM clientes"

    ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <title>alta</title>
</head>

<body>

    <div class="register-photo">
        <div class="form-container"> <h1 class="text-center">ALTA DE USUARIO</h1>
            <div class="image-holder">
                <img class="rounded" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.es%2Fvector-premium%2Finterfaz-usuario-alta-tecnologia-tablero-cpu-brillante-almacenamiento-datos-usuario-red-ui-diseno-ux-ilustracion-vectorial_36504125.htm&psig=AOvVaw046-WcRbMnsR_YmkpujvfT&ust=1684049259601000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCNim5sHi8f4CFQAAAAAdAAAAABAN">
            </div>
            <form method="post" action="action.php">
                <h2 class="text-center"><strong>Crear</strong> una cuenta.</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="nombreInput" name="Nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="Email" placeholder="Email">
                    <div id="emailHelp" class="form-text" name="name">No compartiremos tu email con nadie.</div>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="Direccion" placeholder="Direccion">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="telefonoInput" name="Telefono"
                        placeholder="Telefono"></input>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Confirmar</button>
                </div><a href="#" class="already">¿Ya tienes una cuenta? Inicia sesion.</a>
            </form>
        </div>
    </div>
</body>

</html>