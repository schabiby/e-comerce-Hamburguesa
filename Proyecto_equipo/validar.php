<?php

session_start();
require_once 'conexionDB.php';
$email = $_POST['email'];
$password = $_POST['password'];
$encryptedpassword = sha1($password);
ob_start();
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //Busco si existe usuario con el correo que di en el login
    $resultado = mysqli_query($db, "SELECT * from usuarios where login = '$email'");
    $datos = mysqli_fetch_assoc($resultado);
    $pwd = $datos['pwd'];
    $rol = $datos['rol'];
    //En caso de encontrarlo ...
    if (mysqli_num_rows($resultado) == 1) {
        //Toca verificar si la contraseña coincide en ambos casos
        if ($pwd === $encryptedpassword) {
            $user = mysqli_query($db, "SELECT Nombres from *** where email = '$email'");
            if (mysqli_num_rows($user) == 1) {
                    //Si lo encuentra, que lo saque y lo ponga como variable de sesión
                    $fila2 = mysqli_fetch_assoc($user);
                    $Nombres = $fila2["Nombres"];
                    $_SESSION["NombreLogedIn"] = $Nombres;
                    header('Location: ###.php');
                }
            } else {
                ?>
                <script>
                    alert('Usuario o contraseña invalidos');
                    window.location.href = 'index.php';
                    die();
                </script>
                <?php
            }
            //Si no encuentra al usuario, regresa al login
        } else {
            ?>
            <script>
                alert('Usuario o contraseña invalidos');
                window.location.href = 'index.php';
                die();
            </script>
            <?php
        }
    }
    ?>