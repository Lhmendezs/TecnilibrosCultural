<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagenes/icon.png" />
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Inicio - Tecnilibros Cultural</title>
</head>

<body>
    <?php include("vistas/navbar.php") ?>
    <div class="container-fluid">
        
        <div class="row border-bottom border-top-0  border-secondary">
            <h3 class="mt-2 mb-1 ">Busca título</h3>
            <!-- COL -->
            <div class="col-sm-4 mb-1">
                <form>
                    <input class="form-control mt-1 " type="search" placeholder="Buscar" name="buscarNombre">
                    <button class="btn btn-outline-success btn-sm mt-1 m-1 " type="submit" name="enviarNombre">Buscar</button>
                </form>

            </div>
            <!-- COL -->

            <div class="col-sm-8">

                <table class="table table-striped me-0">
                    <tr>
                        <th>ID</th>
                        <th>TÍTULO DEL LIBRO</th>
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
                                <?php include("AutCatTitulo/addtitulo.php") ?>
                                <h5 class="form-label">Titulo del libro</h5>
                                <input type="text" class="form-control" name="titulo2" placeholder="Título del libro" required>
                            </div>
                            <button type="submit" name="submit" value="CrearTitulo" class="btn btn-primary mb-2">Crear titulo</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Crear nueva categoria -->
        <div class="row border-bottom border-top-0 border-secondary">
            <h3 class="mt-2 mb-1 d-flex">Busca Categoría</h3>
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
                                <?php include("AutCatTitulo/addCategoria.php")?>
                                <h5 class="form-label">Crear Nueva Categoria</h5>
                                <input type="text" class="form-control" name="addCat" placeholder="Categoria" required>
                            </div>
                            <button type="submit" name="submit2" value="CrearCat" class="btn btn-primary mb-2">Crear Categoria</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Autores crear -->

        <div class="row border-bottom border-top-0 border-secondary">
            <h3 class="mt-2 mb-1 d-flex">Gestion de Autores</h3>
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
                        <th>AUTOR</th>
                    </tr>
                    <?php
                
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
                                <?php include("AutCatTitulo/addAutor.php");?>
                                <h3 class="form-label">Nombre Autor</h3>
                                <input type="text" class="form-control" name="addAut" placeholder="Título del libro" required>
                            </div>
                            <button type="submit" name="submit3" value="CrearAut" class="btn btn-primary mb-2">Crear Autor</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>