<?php

/*Interfaz hecha por Pablo Alberto Granados Palma*/

include("conexionDB.php");
include 'include/header.php';

?>
    <div class="register-photo">
        <div class="form-container">
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
                    <input type="password" class="form-control" id="contraseñaInput" name="Contraseña"
                        placeholder="Contraseña"></input>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="Direccion" placeholder="Direccion">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="telefonoInput" name="Telefono"
                        placeholder="Telefono"></input>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Confirmar</button>
                </div><a href="index.php" class="already">¿Ya tienes una cuenta? Inicia sesion.</a>
            </form>
        </div>
    </div>
</body>

</html>