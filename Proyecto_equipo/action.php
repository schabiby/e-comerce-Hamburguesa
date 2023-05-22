<?php 

/*Metodo hecho por Pablo Alberto Granados Palma
Adaptado por Flores Morales Abraham */

include("conexionDB.php");


$nombre = $_POST['Nombre'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$direccion = $_POST['Direccion'];
$contraseña = $_POST['Contraseña'];

$usuarios = "INSERT INTO clientes (Nombre, Email, Contraseña, Telefono, Direccion) VALUES('$nombre','$email','$contraseña','$telefono','$direccion')";
$res = mysqli_query($db, $usuarios);


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        .register-photo {
            background-color: transparent;
            padding: 80px 0;
        }

        .register-photo .image-holder {
            display: table-cell;
            width: auto;
            background: url(../pablo/img/hamburguesa.jpg);
            background-size: cover;
        }

        .register-photo .form-container {
            display: table;
            max-width: 900px;
            width: 90%;
            margin: 0 auto;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .register-photo form {
            display: table-cell;
            width: 400px;
            background-color: #ffffff;
            padding: 40px 60px;
            color: #505e6c;
        }
        .register-photo form h2 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .register-photo form .form-control {
            background: #f7f9fc;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 6px;
            height: 40px;
        }

        .register-photo form .form-check {
            font-size: 13px;
            line-height: 20px;
        }

        .register-photo form .btn-primary {
            background: #f4476b;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 35px;
            text-shadow: none;
            outline: none !important;
        }

        .register-photo form .btn-primary:hover,
        .register-photo form .btn-primary:active {
            background: #eb3b60;
        }

        .register-photo form .btn-primary:active {
            transform: translateY(1px);
        }

        .register-photo form .already {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        h1{
            background:#ffffff;

        }

        body{
            background: url(../pablo/img/login.jpg);
        }

        

        @media (max-width:991px) {
            .register-photo form {
                padding: 40px;
            }
        }
    </style>
</head>
<div class="register-photo">
        <div class="form-container p-5">
            
            <h1 style="align-self: center;">Alta de
                <?php echo $nombre ?> exitosa
            </h1>
            <br>
            <div class="form-group">
                <button class="btn btn-primary btn-block" role="link" onclick="window.location='index.php'">Regresar</button>
            </div>

        </div>
    </div>
</html>
