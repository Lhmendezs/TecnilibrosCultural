<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="imagenes/icon.png" />
  <title>Inicio - Tecnilibros Cultural</title>
  <link rel="stylesheet" href="http://localhost/tecnilibros_cultural-master/assets/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!-- Barra de tareas -->
  <?php include("vistas/navbar.php")?>

  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner pt-1">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="imagenes/Slide1.png" class="d-block w-100" alt="slide1-1" />
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="imagenes/slide3.png" class="d-block w-100" alt="Slide3" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Contenido principal -->
  <div class="main-content">
    <div class="store-image">
      <h2>Bienvenido</h2>
      <img src="imagenes/tienda.jpg" alt="Imagen de la tienda" />
      <p>Logeado como Administrador</p>
    </div>
    <div class="notifications">
      <h2>Últimas Notificaciones</h2>
      <ul>
        <li class="blue-notification">Libros más vendidos</li>
        <li class="yellow-notification">Restablecer libro más vendido</li>
        <li class="red-notification">Libro sin existencias</li>
      </ul>
    </div>
  </div>

  <script src="http://localhost/tecnilibros_cultural-master/assets/js/bootstrap.min.js"></script>
</body>

</html>