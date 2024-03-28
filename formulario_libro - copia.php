<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagenes/icon.png" />
    <title>Inicio - Tecnilibros Cultural</title>

</head>

<body>

    <!-- Barra de tareas -->
    <?php include("vistas/navbar.php") ?>
    <div class="container-fluid ">
        <div class="row">
            <!-- Columna de formunlario libro -->
            <div class="col-sm-4 border border-top-0">
                <h1>Añadir Libro</h1>
                <form class="libroA-form ps-2" method="post">
                    <div class="mb-3">
                        <label class="form-label">Titulo del libro</label>
                        <input type="number" class="form-control" name="titulo" placeholder="Título del libro" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edicion</label>
                        <input type="number" class="form-control" name="edicion" placeholder="Edición del libro" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" placeholder="Precio del libro" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="number" class="form-control" name="precio" placeholder="Precio del libro" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CATEGORIA</label>
                        <input type="number" class="form-control" name="precio" placeholder="Precio del libro" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">AUTOR</label>
                        <input type="number" class="form-control" name="precio" placeholder="Precio del libro" required>
                    </div>
                    <button type="submit" name="submit" value="CrearLibro" class="btn btn-primary">Añadir</button>
                </form>

            </div>

            <div class="col-sm-8">
                <div class="container-fluid">
                    <div class="row border-bottom border-top-0  border-secondary">
                        <h3 class="mt-2 mb-1 ">Busca titulo</h3>
                        <!-- COL -->
                        <div class="col-sm-4 mb-1">
                            <form>
                                <input class="form-control mt-1 " type="search" placeholder="Buscar" name="buscarNombre">
                                <button class="btn btn-outline-success btn-sm mt-1 m-1 " type="submit" name="enviarNombre">Buscar</button>

                            </form>

                        </div>
                        <!-- COL -->

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">

                            <table class="table table-striped me-0">
                                <tr>
                                    <th>ID</th>
                                    <th>TITULO DEL LIBRO</th>
                                </tr>
                                <?php
                                include("Conexion/conexion_bd.php");
                                if (isset($_GET['enviarNombre'])) {
                                    $buscar = $_GET['buscarNombre'];
                                    if (isset($_GET['buscarNombre'])) {
                                        $sql = $conexion->query("SELECT * FROM titulo_libro  WHERE nombre LIKE '%$buscar%' ORDER BY id_titulo ASC;");
                                        while ($datos = $sql->fetch_object()) { ?>
                                            <tr>
                                                <td><?= $datos->id_titulo ?></td>
                                                <td><?= $datos->nombre ?></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>

                            </table>

                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <form class="libroA-form" method="post">
                                        <div class="mb-3">
                                            <h5 class="form-label">Titulo del libro</h5>
                                            <input type="text" class="form-control" name="titulo" placeholder="Título del libro" required>
                                        </div>
                                        <button type="submit" name="submit" value="CrearLibro" class="btn btn-primary mb-2">Crear titulo</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Crear nueva categoria -->
                    <div class="row border-bottom border-top-0 border-secondary">
                        <h3 class="mt-2 mb-1 d-flex">Busca Categoria</h3>
                        <!-- COL -->
                        <div class="col-sm-4 mb-1">
                            <form>
                                <input class="form-control mt-1 " type="search" placeholder="Buscar" name="buscarCat">
                                <button class="btn btn-outline-success btn-sm mt-1 m-1 " type="submit" name="enviarCat">Buscar</button>
                            </form>

                        </div>
                        <!-- COL -->

                        <div class="col-sm-8">

                            <table class="table table-striped me-0">
                                <tr>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                </tr>
                                <?php
                                include("Conexion/conexion_bd.php");
                                if (isset($_GET['enviarCat'])) {
                                    $buscar = $_GET['buscarCat'];
                                    if (isset($_GET['buscarCat'])) {
                                        $sql = $conexion->query("SELECT * FROM categoria  WHERE nombre_categoria LIKE '%$buscar%' ORDER BY id_categoria ASC;");
                                        while ($datos = $sql->fetch_object()) { ?>
                                            <tr>
                                                <td><?= $datos->id_categoria ?></td>
                                                <td><?= $datos->nombre_categoria ?></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>

                            </table>

                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <form class="libroA-form" method="post">
                                        <div class="mb-3">
                                            <h5 class="form-label">Crear Nueva Categoria</h5>
                                            <input type="text" class="form-control" name="addCat" placeholder="Categoria" required>
                                        </div>
                                        <button type="submit" name="submit" value="CrearCat" class="btn btn-primary mb-2">Crear Categoria</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Autores crear -->

                    <div class="row border-bottom border-top-0 border-secondary">
                        <h3 class="mt-2 mb-1 d-flex">Busca de Autores</h3>
                        <!-- COL -->
                        <div class="col-sm-4 mb-1">
                            <form>
                                <input class="form-control mt-1 " type="search" placeholder="Buscar" name="buscarAut">
                                <button class="btn btn-outline-success btn-sm mt-1 m-1 " type="submit" name="enviarAut">Buscar</button>
                            </form>

                        </div>
                        <!-- COL -->

                        <div class="col-sm-8">

                            <table class="table table-striped me-0">
                                <tr>
                                    <th>ID</th>
                                    <th>Autor</th>
                                </tr>
                                <?php
                                include("Conexion/conexion_bd.php");
                                if (isset($_GET['enviarAut'])) {
                                    $buscar = $_GET['buscarAut'];
                                    if (isset($_GET['buscarAut'])) {
                                        $sql = $conexion->query("SELECT * FROM autor  WHERE nombre_autor LIKE '%$buscar%' ORDER BY id_autor ASC;");
                                        while ($datos = $sql->fetch_object()) { ?>
                                            <tr>
                                                <td><?= $datos->id_autor ?></td>
                                                <td><?= $datos->nombre_autor ?></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>

                            </table>

                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col ">
                                    <form class="libroA-form" method="post">
                                        <div class="mb-3">
                                            <h3 class="form-label">Titulo del libro</h3>
                                            <input type="text" class="form-control" name="titulo" placeholder="Nombre Autor" required>
                                        </div>
                                        <button type="submit" name="submit" value="CrearLibro" class="btn btn-primary mb-2">Crear titulo</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




</body>

</html>