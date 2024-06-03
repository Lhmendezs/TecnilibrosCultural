<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="imagenes/icon.png" />
  <title>Inicio - Tecnilibros Cultural</title>
  <link rel="stylesheet" href="http://localhost/pruebas/assets/css/bootstrap.min.css" />
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <div class="store-image">
        <h2>Bienvenido</h2>
        <img src="imagenes/tienda.jpg" alt="Imagen de la tienda" />
        <p>Logeado como Administrador</p>
    </div>
      </div>
      <div class="col-sm-9">
      <h2>Libros publicados en Mercado Libre</h2>
      <table class="table table-striped col-4">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CANTIDAD DISPONIBLE</th>
                        <th>EDICION</th>
                        <th>PRECIO</th>
                        <th>ISBN</th>
                        <th>MELI</th>
                        <th>AUTOR</th>
                        <th>EDITAR</th>

                    </tr>
                    <?php
                    include("Conexion/conexion_bd.php");


                    $sql = $conexion->query("SELECT
                    l.id_libro,
                    tl.nombre AS nombre_libro,
                    l.cantidad_disponible,
                    l.num_edicion,
                    l.precio,
                    l.ISBN,
                    l.MeLi,
                    GROUP_CONCAT(DISTINCT a.nombre_autor SEPARATOR ', ') AS autores
                FROM
                    libros l
                JOIN
                    titulo_libro tl ON l.id_titulo = tl.id_titulo
                LEFT JOIN
                    libro_categoria lc ON l.id_libro = lc.id_libro
                LEFT JOIN
                    libro_autor la ON l.id_libro = la.id_libro
                LEFT JOIN
                    autor a ON la.id_autor = a.id_autor
                WHERE l.MeLi = 'si'
                AND l.cantidad_disponible = 0
                GROUP BY
                    l.id_libro;");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_libro ?></td>
                            <td><?= $datos->nombre_libro ?></td>
                            <td><?= $datos->cantidad_disponible ?></td>
                            <td><?= $datos->num_edicion ?></td>
                            <td><?= $datos->precio ?></td>
                            <td><?= $datos->ISBN ?></td>
                            <td><?= $datos->MeLi ?></td>
                            <td><?= $datos->autores ?></td>
                            <td>
                                <a href="modificarLibro.php?idBooks=<?= $datos->id_libro ?>" class="bi bi-pencil-square">Editar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
      </div>
    </div>
  </div>
 

  <script src="http://localhost/pruebas/assets/js/bootstrap.min.js"></script>
</body>

</html>