<?php include 'include/header.php';

/*Interfaz hecha por Jose de Jesus Zarate Torres y Flores Morales Abraham*/

session_start();
if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
}
?>

<nav class="nav" style="display: none">
  <i class="uil uil-bars navOpenBtn"></i>
  <a href="#" class="logo"><img src="images/logo.png" alt=""></a>

  <ul class="nav-links">
    <i class="uil uil-times navCloseBtn"></i>
    <li><a href="#">Home</a></li>
    <li><a href="#">Sobre nosotros</a></li>
    <li><a href="#">Catalogo</a></li>
    <li><a href="#">Acerca de</a></li>
    <li><a href="#">LOGIN</a></li>
    <li><a href="#"><img src="images/image.png" alt="" class="logo-img"></a></li>
  </ul>

  <i class="uil uil-search search-icon" id="searchIcon"></i>
  <div class="search-box">
    <i class="uil uil-search search-icon"></i>
    <input type="text" placeholder="Buscar..." />
  </div>
</nav>

<br><br><br><br><br><br><br>

<p class="welcomeBanner">Bienvenido
  <?php echo $_SESSION["NombreLogedIn"]; ?> Conoce nuestro delicioso menu!
</p>
<div class="container" style="text-align: right">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="display: inline-block;">
    <button type="submit" name="logout" class="btn btn-secondary">Cerrar sesión</button>
  </form>
  <form method="post" action="ordenes.php" style="display: inline-block;">
    <button type="submit" name="logout" class="btn btn-secondary">Ver mis pedidos</button>
  </form>
</div>
<section class="contenido">
  <div class="mostrador" id="mostrador">
    <?php
    include("conexionDB.php");
    $query = "SELECT * FROM catalogo ";
    $resultado = $db->query($query);
    $contador = 0; // Variable para contar los registros
    
    while ($row = $resultado->fetch_assoc()) {
      $id = $row['ID_Producto'];
      /*$imagen = "images/" .$id. ".png";*/
      $imagen = $row['RutaImagen'];

      /* if (!file_exists($imagen)) {
         $imagen = "images/nofoto.png";
       }*/
      // Cerrar y abrir una nueva fila después de mostrar 6 registros
      if ($contador % 5 == 0) {
        if ($contador != 0) {
          echo '</div>';
        }
        echo '<div class="fila">';
      }
      ?>

      <div class="item" onclick="cargar(this)">
        <div class="contenedor-foto">
          <img src="<?php echo //$row['RutaImagen']  
              $imagen; ?>">
        </div>
        <p class="descripcion" id="desc">
          <?php echo $descrip = $row['Descripción']; ?>
        </p>
        <p class="modelo" style="display:none">
          <?php echo $row['ID_Producto']; ?>
        </p>

        <span class="precio">$
          <?php echo $row['Costo']; ?>
        </span>
      </div>

      <?php
      $contador++; // Incrementar el contador
    }
    ?>
  </div>
  </div>

  <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
  <div class="seleccion" id="seleccion">
    <div class="cerrar" onclick="cerrar()">
      &#x2715
    </div>
    <div class="info">
      <img src=" " alt="" id="imagen">
      <h2 id="modelo" style="display:none"></h2>
      <p id="descripcion">
        <?php echo $descrip ?>
      </p>

      <span class="precio" id="precio"></span>

      <div class="fila" onclick="addCart(this)">
        <h2 id="modelo2" style="display:none"></h2>
        <p id="descripcion2" style="display:none">
          <?php echo $descrip ?>
        </p>
        <input type="number" class="quantity" min="1" value="1" onclick=""></input>
        <button id="addcart" class="btn btn-primary btn-add-to-cart">AGREGAR AL CARRITO</button>
      </div>
    </div>
  </div>
</section>
<script>

  //Aqui va el js del catalogo
  let mostrador = document.getElementById("mostrador");
  let seleccion = document.getElementById("seleccion");
  let imgSeleccionada = document.getElementById("imagen");
  let modeloSeleccionado = document.getElementById("modelo");
  let descripSeleccionada = document.getElementById("descripcion");
  let modeloSeleccionado2 = document.getElementById("modelo2");
  let descripSeleccionada2 = document.getElementById("descripcion2");
  let precioSeleccionado = document.getElementById("precio");
  btnadd = document.getElementById("addcart");

  function cargar(item) {
    quitarBordes();
    mostrador.style.width = "59%";
    seleccion.style.width = "40%";
    seleccion.style.opacity = "1";
    item.style.border = "4px solid #e3ca56";

    imgSeleccionada.src = item.getElementsByTagName("img")[0].src;
    modeloSeleccionado.innerHTML = item.getElementsByTagName("p")[1].innerHTML;
    descripSeleccionada.innerHTML = item.getElementsByClassName("descripcion")[0].innerHTML;
    modeloSeleccionado2.innerHTML = item.getElementsByTagName("p")[1].innerHTML;
    descripSeleccionada2.innerHTML = item.getElementsByClassName("descripcion")[0].innerHTML;
    precioSeleccionado.innerHTML = item.getElementsByTagName("span")[0].innerHTML;

  }


  function cerrar() {
    mostrador.style.width = "100%";
    seleccion.style.width = "0%";
    seleccion.style.opacity = "0";
    quitarBordes();
  }
  function quitarBordes() {
    var items = document.getElementsByClassName("item");
    for (i = 0; i < items.length; i++) {
      items[i].style.border = "none";
    }
  }
</script>
<script>

  const nav = document.querySelector(".nav"),
    searchIcon = document.querySelector("#searchIcon"),
    navOpenBtn = document.querySelector(".navOpenBtn"),
    navCloseBtn = document.querySelector(".navCloseBtn");

  searchIcon.addEventListener("click", () => {
    nav.classList.toggle("openSearch");
    nav.classList.remove("openNav");
    if (nav.classList.contains("openSearch")) {
      return searchIcon.classList.replace("uil-search", "uil-times");
    }
    searchIcon.classList.replace("uil-times", "uil-search");
  });

  navOpenBtn.addEventListener("click", () => {
    nav.classList.add("openNav");
    nav.classList.remove("openSearch");
    searchIcon.classList.replace("uil-times", "uil-search");
  });
  navCloseBtn.addEventListener("click", () => {
    nav.classList.remove("openNav");
  });

</script>

<!-- Esta es la interfaz del carrito -->

<section id="cart">

  <h2 class="titleCarrito">Carrito</h2>
  <ul id="cart-items">
    <!-- Aquí se mostrarán los productos agregados al carrito -->
  </ul>
  <p>Total: $<span id="total">0.00</span></p>
  <button id="checkout-btn" class="btn btn-primary">Realizar pedido</button>

</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  const cartItems = [];
  const cartItemsList = document.getElementById('cart-items');
  const totalElement = document.getElementById('total');

  const checkoutButton = document.getElementById('checkout-btn');

  var listaDatos;

  getProducts()

  function getProducts() {
    fetch('get_products.php')
      .then(response => response.json())
      .then(data => {
        listaDatos = data
      })
      .catch(error => {
        console.log('Error al obtener la lista de productos:', error);
      });
  }

  function addCart(item) {
    if (event.target.classList.contains('btn-add-to-cart')) {
      const id = parseInt(item.getElementsByTagName("h2")[0].innerHTML);
      const quantity = parseInt(event.target.parentElement.querySelector('.quantity').value);
      addToCart(id, quantity);
    }
  }

  const addToCart = (id, quantity) => {
    const product = listaDatos.find(product => product.id == id);
    if (product) {
      const existingItem = cartItems.find(item => item.id === id);
      if (existingItem) {
        existingItem.quantity += quantity;
      } else {
        cartItems.push({ ...product, quantity });
      }
      renderCartItems();
    } else {
      alert("Algo no funciona");
    }
  };

  function renderCartItems() {
    cartItemsList.innerHTML = '';
    cartItems.forEach(item => {
      const cartItem = document.createElement('li');
      cartItem.innerHTML = `
          <span class="nameItem">${item.name}</span>
          <span class="item-price">$${item.price}</span>
          <div class="actions">
            <input type="number" class="quantity" min="1" value="${item.quantity}">
            <button class="btn btn-danger btn-remove-item" data-id="${item.id}">Eliminar</button>
          </div>
        `;
      cartItemsList.appendChild(cartItem);
    });
    const totalPrice = cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);
    totalElement.textContent = totalPrice;
  };

  // Evento para eliminar un producto del carrito
  cartItemsList.addEventListener('click', event => {
    if (event.target.classList.contains('btn-remove-item')) {
      const id = parseInt(event.target.dataset.id);
      removeFromCart(id);
    }
  });

  // Evento para actualizar la cantidad de un producto en el carrito
  cartItemsList.addEventListener('change', event => {
    if (event.target.classList.contains('quantity')) {
      const id = parseInt(event.target.parentElement.querySelector('.btn-remove-item').dataset.id);
      const quantity = parseInt(event.target.value);
      updateQuantity(id, quantity);
    }
  });

  // Función para eliminar un producto del carrito
  const removeFromCart = id => {
    const index = cartItems.findIndex(item => item.id == id);
    if (index !== -1) {
      cartItems.splice(index, 1);
      renderCartItems();
    }
  };

  // Función para actualizar la cantidad de un producto en el carrito
  const updateQuantity = (id, quantity) => {
    const item = cartItems.find(item => item.id == id);
    if (item) {
      item.quantity = quantity;
      renderCartItems();
    }
  };



  // Evento para realizar el pedido (checkout)
  checkoutButton.addEventListener('click', () => {
    if (cartItems.length > 0) {
      var total = document.getElementById("total").innerHTML;
      var formData = {
        total: parseFloat(total)
      };

      $.ajax({
        url: 'insertar.php',
        method: 'POST',
        data: formData,
        success: function (response) {
          console.log(response);
          Swal.fire('¡Pedido realizado!', 'Tu pedido ha sido procesado correctamente.', 'success');
          cartItems.length = 0;
          renderCartItems();
        },
        error: function (xhr, status, error) {
          console.error('Error al enviar los datos:', error);
        }
      });
    } else {
      alert("El carrito está vacío, añade productos.");
    }
  });



</script>

<?php
include 'include/footer.php';
?>