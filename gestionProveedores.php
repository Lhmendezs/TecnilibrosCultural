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
    <?php include("vistas/navbar.php")?>

    <div class="gestionary-page">

        <div class="container-fluid">

            <div class="row ps-1">
                <h3 class="mt-2 mb-1 text-center">Gestion de proveedores</h3>
                <form class="col-md-4 mb-1 d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" name="buscar">
                    <button class="btn btn-outline-success btn-sm" type="submit" name="enviar">Buscar</button>
                </form>
                <?php
                include("Conexion/conexion_bd.php");
                include("Controlador/eliminarProveedor.php");
                ?>
            </div>

            <div class="row ms-1 me-1 ">
                <div class="col-sm-4 border border-end-0 ">
                    <h3 class="pt-1">Añadir Proveedor</h3>
                    <?php
                    include("Controlador/anadirProveedor.php");
                    ?>
                    <form class="libroA-form" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre del Proveedor</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del proveedor" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailProveedor" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefonoProveedor" placeholder="Teléfono" required>
                        </div>
                        <button type="submit" name="submit" value="CrearProveedor" class="btn btn-primary">Añadir</button>
                    </form>
                </div>
                <div class="col-sm-8 border ">
                    <h3 class="pt-1">Busqueda</h3>
                    <table class="table table-striped col-4">
                        <tr>
                            <th>ID</th>
                            <th>PROVEEDOR</th>
                            <th>DIRECCIÓN</th>
                            <th>EMAIL</th>
                            <th>TELEFONO</th>
                            <th>EDITAR</th>

                        </tr>
                        <?php
                        include("Conexion/conexion_bd.php");
                        if (isset($_GET['enviar'])) {
                            $buscar = $_GET['buscar'];
                            if (isset($_GET['buscar'])) {



                                $sql = $conexion->query("SELECT * FROM proveedor  WHERE nombre_proveedor LIKE '%$buscar%' OR correo_proveedor LIKE '%$buscar%' ORDER BY id_proveedor ASC;");
                                while ($datos = $sql->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $datos->id_proveedor ?></td>
                                        <td><?= $datos->nombre_proveedor ?></td>
                                        <td><?= $datos->direccion_proveedor ?></td>
                                        <td><?= $datos->correo_proveedor ?></td>
                                        <td><?= $datos->telefono_proveedor ?></td>
                                        <td>
                                            <a href="modificar_proveedor.php?id=<?= $datos->id_proveedor ?>" class="bi bi-pencil-square">Editar</a>
                                            <a onclick="return eliminar()" href="gestionProveedores.php?id=<?= $datos->id_proveedor ?>" class="bi bi-trash3-fill me-1" style="color: red;">Eliminar</a>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>

                    </table>
                </div>

            </div>

            <div class="row ms-1 me-1 mt-1 border-top">
                <h3 class="pt-1">Lista de Proveedores</h3>
                <table class="table table-striped col-4">
                    <tr>
                        <th>ID</th>
                        <th>PROVEEDOR</th>
                        <th>DIRECCIÓN</th>
                        <th>EMAIL</th>
                        <th>TELEFONO</th>
                        <th>EDITAR</th>

                    </tr>
                    <?php
                    include("proveedorGestion.php");
                    $registros = mostrarProveedores();
                    foreach($registros as $registro){
                       echo "<tr>";
                       echo "<td>".$registro['id_proveedor']."</td>";
                       echo"<td> ".$registro['nombre_proveedor']."</td>";
                       echo "<td> ".$registro['direccion_proveedor']." </td>";
                       echo"<td> ".$registro['correo_proveedor']."";
                       echo "<td> ".$registro['telefono_proveedor']."</td>";
                       echo "<td>
                            <a href='modificar_proveedor.php?id=".$registro['id_proveedor']."' class='bi bi-pencil-square'>Editar</a>
                            <a onclick='return eliminar()' href='gestionProveedores.php?id=".$registro['id_proveedor']."' class='bi bi-trash3-fill me-1' style='color: red;'>Eliminar</a>
                        </td>";
                        echo "</tr>";
                    }
                    
                    ?>

                    <!-- Agregar más filas con datos de libros -->
                </table>
            </div>

        </div>
    </div>
    <script src="http://localhost/tecnilibros_cultural-master/assets/js/bootstrap.min.js"></script>
</body>

</html>