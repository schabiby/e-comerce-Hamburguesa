<?php include 'include/header.php'; ?>

<section class="home" id="home">

   <div class="content">
      <img data-aos="fade-up" src="images/burger-baner.png" alt="">
      <h3 data-aos="fade-up">Hamburguesas de las buenas</h3>
      <p data-aos="fade-up">descripcion va aqui</p>
      <a data-aos="fade-up" href="#menu" class="btn">our menu</a>
   </div>

</section>


<!-- menu section starts  -->

<section class="menu" id="menu">

   <div class="heading">
      <img src="images/title-img.png" alt="">
      <h3>our menu</h3>
   </div>

   <div class="box-container">

      <div class="box" data-aos="fade-up">
         <img src="images/product-1.png" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>cheese hamburger</h3>
            <div class="price">$29.99</div>
            <a href="#" class="btn">add to cart</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up">
         <img src="images/product-2.png" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>cheese hamburger</h3>
            <div class="price">$29.99</div>
            <a href="#" class="btn">add to cart</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up">
         <img src="images/product-3.png" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>cheese hamburger</h3>
            <div class="price">$29.99</div>
            <a href="#" class="btn">add to cart</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up">
         <img src="images/product-4.png" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>cheese hamburger</h3>
            <div class="price">$29.99</div>
            <a href="#" class="btn">add to cart</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up">
         <img src="images/product-5.png" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>cheese hamburger</h3>
            <div class="price">$29.99</div>
            <a href="#" class="btn">add to cart</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up">
         <img src="images/product-6.png" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>cheese hamburger</h3>
            <div class="price">$29.99</div>
            <a href="#" class="btn">add to cart</a>
         </div>
      </div>
      
   </div>

</section>

<!-- menu section ends -->


<!-- scripts funcionality starts -->

<script>
let searchBtn = document.querySelector('#search-btn');
let searchForm = document.querySelector('.header .search-form');

searchBtn.onclick = () =>{
   searchBtn.classList.toggle('fa-times');
   searchForm.classList.toggle('active');
   menuBtn.classList.remove('fa-times');
   navbar.classList.remove('active');
}

let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menuBtn.onclick = () =>{
   menuBtn.classList.toggle('fa-times');
   navbar.classList.toggle('active');
   searchBtn.classList.remove('fa-times');
   searchForm.classList.remove('active');
}

window.onscroll = () =>{
   searchBtn.classList.remove('fa-times');
   searchForm.classList.remove('active');
   menuBtn.classList.remove('fa-times');
   navbar.classList.remove('active');
}

</script>



<!-- scripts funcionality ends -->



<!-- modal part starts  -->

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel"><i class="fas fa-user"></i> LogIn</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                        }
                    });
                }

            }
        });
    });
</script>

<!-- modal part ends  -->

<?php include 'include/footer.php'; ?>