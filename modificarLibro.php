<?php
include("Conexion/conexion_bd.php");
$id = $_GET["idBooks"];

$sql = $conexion->query("SELECT
l.id_libro,
tl.id_titulo,
tl.nombre AS nombre_libro,
l.cantidad_disponible,
l.num_edicion,
l.precio,
l.ISBN,
l.librero,
GROUP_CONCAT(DISTINCT c.id_categoria SEPARATOR ', ') AS categorias,
GROUP_CONCAT(DISTINCT a.id_autor SEPARATOR ', ') AS autores
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
WHERE l.id_libro =$id;");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagenes/icon.png" />
    <title>Inicio - Tecnilibros Cultural</title>
    <link rel="stylesheet" href="http://localhost/tecnilibros_cultural-master/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Barra de tareas -->
    <?php include("vistas/navbar.php")?>

    <div class="container">
        <h1>Modificar Libro</h1>
        
        <form class="ProveedorA-form" method="post">
            <?php
            include("Controlador/modificarLibroController.php");
            while ($datos = $sql->fetch_object()) { ?>
                <input type="text" name="idLibro" value="<?= $_GET['idBooks']?>">
                <h5 for="">Estas editando " <?= $datos->nombre_libro?> "</h5>
                <div class="mb-3">
                    <label class="form-label">TIUTLO</label>
                    <input type="number" class="form-control" name="bTitulo" value="<?= $datos->id_titulo?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">CANTIDAD</label>
                    <input type="number" class="form-control" name="bCantidad" value="<?=$datos->cantidad_disponible?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">EDICION</label>
                    <input type="number" class="form-control" name="bEdicion" value="<?=$datos->num_edicion ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">PRECIO</label>
                    <input type="number" class="form-control" name="bPrecio" value="<?=$datos->precio?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">ISBN</label>
                    <input type="number" class="form-control" name="bIsbn" value="<?=$datos->ISBN?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">LIBRERO</label>
                    <input type="text" class="form-control" name="bLibrero" value="<?=$datos->librero?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">CATEGORIA</label>
                    <input type="text" class="form-control" name="bCtegoria" value="<?=$datos->categorias?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">AUTOR</label>
                    <input type="text" class="form-control" name="bAutor" value="<?=$datos->autores ?>" required>
                </div>
            <?php
            }
            ?>


            <button type="submit" name="btnmodificarBook" value="ModificarProveedor" class="btn btn-primary">Modificar Libro</button>
        </form>
        <a href="gestionLibros.php" class="bi bi-arrow-return-left">Regresar</button></a>
    </div>


    <script src="http://localhost/tecnilibros_cultural-master/assets/js/bootstrap.min.js"></script>
</body>

</html>