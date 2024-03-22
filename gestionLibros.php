<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagenes/icon.png" />
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Inicio - Tecnilibros Cultural</title>
    <link rel="stylesheet" href="http://localhost/tecnilibros_cultural-master/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <script>
        function eliminar() {
            var respuesta = confirm("Estas seguro que deseas eliminar?")
            return respuesta;
        }
    </script>
    <!-- Barra de tareas -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-1 shadow" id="menu">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <a class="navbar-brand" href="gestionLibros.php">
                        <img src="imagenes/icon.png" alt="" style="height: 30px" />
                        <span class="fs-5 fw-bold mx-auto">Tecnilibros Cultural</span>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link active" href="gestionLibros.php" aria-current="page">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestionProveedores.php">Proveedores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="gestionary-page">

        <div class="container-fluid">

            <div class="row">
                <p class="mt-2 mb-1">Gestión de Libros</p>
                <form class="col-md-4 mb-1 d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success btn-sm" type="submit">Buscar</button>
                </form>
                <a class="a-ref ms-1 bi bi-plus-square" href="formulario_libro.php" style=" text-decoration: none"> Añadir Libro</a>

            </div>
            <div class="row ms-1 me-5">
                <table class="table table-striped col-4">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CANTIDAD DISPONIBLE</th>
                        <th>EDICION</th>
                        <th>PRECIO</th>
                        <th>ISBN</th>
                        <th>LIBRERO</th>
                        <th>CATEGORIA</th>
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
                    l.librero,
                    GROUP_CONCAT(DISTINCT c.nombre_categoria SEPARATOR ', ') AS categorias,
                    GROUP_CONCAT(DISTINCT a.nombre_autor SEPARATOR ', ') AS autores
                FROM
                    libros l
                JOIN
                    titulo_libro tl ON l.id_titulo = tl.id_titulo
                LEFT JOIN
                    libro_categoria lc ON l.id_libro = lc.id_libro
                LEFT JOIN
                    categoria c ON lc.id_categoria = c.id_categoria
                LEFT JOIN
                    libro_autor la ON l.id_libro = la.id_libro
                LEFT JOIN
                    autor a ON la.id_autor = a.id_autor
                GROUP BY
                    l.id_libro;");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_libro?></td>
                            <td><?= $datos->nombre_libro ?></td>
                            <td><?= $datos->cantidad_disponible ?></td>
                            <td><?= $datos->num_edicion ?></td>
                            <td><?= $datos->precio ?></td>
                            <td><?= $datos->ISBN ?></td>
                            <td><?= $datos->librero ?></td>
                            <td><?= $datos->categorias ?></td>
                            <td><?= $datos->autores ?></td>
                            <td>
                                <a href="modificar_libro.php?id=<?= $datos->id_libro ?>" class="bi bi-pencil-square">Editar</a>
                                <a onclick="return eliminar()" href="gestionLibros.php?id=<?= $datos->id_libro ?>" class="bi bi-trash3-fill me-1" style="color: red;">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>

        </div>
    </div>
    <script src="http://localhost/tecnilibros_cultural-master/assets/js/bootstrap.min.js"></script>
</body>

</html>