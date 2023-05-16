<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger thing</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!--escribes o modificas-->

<header class="header">

   <section class="flex">

      <div id="menu-btn" class="fas fa-bars icons"></div>
      <div id="search-btn" class="fas fa-search icons"></div>
   
      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#menu">menu</a>
         <a href="#about">about</a>
         <span class="space"></span>
         <a href="#reviews">reviews</a>
         <a href="#contact">contact</a>
         <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt"></i> Login
          </button>
      </nav>
   
      <a href="#" class="fas fa-shopping-cart icons"></a>
   
      <a href="#home" class="logo"><img src="images/logo.png" alt=""></a>
   
      <form action="" class="search-form">
         <input type="search" name="" placeholder="search here..." id="search-box">
         <label for="search-box" class="fas fa-search icons"></label>
      </form>

   </section>

</header>

<!-- home starts -->
<section class="home" id="home">

   <div class="content">
      <img data-aos="fade-up" src="images/burger-baner.png" alt="">
      <h3 data-aos="fade-up">Hamburguesa de la buena</h3>
      <p data-aos="fade-up">just eat it i beg you </p>
      <a data-aos="fade-up" href="#menu" class="btn">Menu</a>
   </div>

</section>
<!-- home ends -->