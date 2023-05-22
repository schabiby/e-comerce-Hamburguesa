<?php



session_start();
require_once 'conexionDB.php';
$email = $_POST['email'];
$password = $_POST['password'];
ob_start();
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //Busco si existe usuario con el correo que di en el login
    $resultado = mysqli_query($db, "SELECT * from clientes where Email = '$email'");
    $datos = mysqli_fetch_assoc($resultado);
    $pwd = $datos['Contraseña'];
    //En caso de encontrarlo ...
    if (mysqli_num_rows($resultado) == 1) {
        //Toca verificar si la contraseña coincide en ambos casos
        if ($pwd === $password) {
            $user = mysqli_query($db, "SELECT Nombre from clientes where email = '$email'");
            if (mysqli_num_rows($user) == 1) {
                    //Si lo encuentra, que lo saque y lo ponga como variable de sesión
                    $fila2 = mysqli_fetch_assoc($user);
                    $Nombres = $fila2["Nombre"];
                    $_SESSION["NombreLogedIn"] = $Nombres;
                    header('Location: catalogo.php');
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