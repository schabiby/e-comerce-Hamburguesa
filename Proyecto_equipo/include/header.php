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


