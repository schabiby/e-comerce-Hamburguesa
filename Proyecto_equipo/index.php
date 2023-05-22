<?php include 'include/header.php'; 

/*Interfaz hecha por Dorcelus Schabthaina */

?>


<section class="home" id="home">
    <!-- home starts -->
    <div class="content">
        <img data-aos="fade-up" src="images/burger-baner.png" alt="" style="width: 300px; height: auto">
        <h3 data-aos="fade-up">Hamburguesa de la buena</h3>
        <p data-aos="fade-up">Just eat it, I beg you!</p>
        <p data-aos="fade-up">Bienvenido, por favor Registrate</p>
        <form action="alta.php" method="post">
            <button data-aos="fade-up" type="submit" class="btn btn-success" data-bs-toggle="modal" value="Sign Up"
            >Registrarse</button>
        </form>
    </div>
    <!-- home ends -->
</section>
<!-- modal part starts  -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-4">
            <div class="modal-header border-0 mb-2">
                <h5 class="modal-title" id="loginModalLabel"><i class="fas fa-user"></i> Welcome</h5>
                <button type="button" class="close" aria-label="Close" disabled='true'></button>
            </div>
            <div class="modal-body">
                <h3 class="mb-4 title">Ingresa sus datos</h3>

                <form action="validar.php" method="post" class="was-validated" id="formulario">
                    <div class="mb-3">
                        <label for="email"><i class="fas fa-envelope"></i> Correo</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div id="email-feedback" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password"><i class="fas fa-key"></i> Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div id="password-feedback" class="invalid-feedback"></div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        $('#formulario').submit(function (e) {
            e.preventDefault();
            var correo = $('#email').val();
            var pw = $('password').val();
            if (correo != null && pw != null) {
                var correoValido = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(correo);
                if (correoValido) {
                    $.ajax({
                        url: 'validar.php',
                        type: 'POST',
                        data: $('formulario').serialize()
                        success: function (response) {
                        },
                        error: function (xhr, status, error) {
                            // Manejar los errores de la solicitud AJAX
                        }
                    });
                }

            }
        });
    });

    let searchBtn = document.querySelector('#search-btn');
    let searchForm = document.querySelector('.header .search-form');

    searchBtn.onclick = () => {
        searchBtn.classList.toggle('fa-times');
        searchForm.classList.toggle('active');
        menuBtn.classList.remove('fa-times');
        navbar.classList.remove('active');
    }

    let menuBtn = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');

    menuBtn.onclick = () => {
        menuBtn.classList.toggle('fa-times');
        navbar.classList.toggle('active');
        searchBtn.classList.remove('fa-times');
        searchForm.classList.remove('active');
    }

    window.onscroll = () => {
        searchBtn.classList.remove('fa-times');
        searchForm.classList.remove('active');
        menuBtn.classList.remove('fa-times');
        navbar.classList.remove('active');
    }

</script>

<!-- modal part ends  -->


<?php include 'include/footer.php'; ?>