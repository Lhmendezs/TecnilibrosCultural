
<script>
        function eliminar() {
            var respuesta = confirm("Estas seguro que deseas eliminar?")
            return respuesta;
        }




<div class="row ms-1 me-5">
    <table class="table table-striped col-4">
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>CANTIDAD DISPONIBLE</th>
            <th>EDICION</th>
            <th>PRECIO</th>
            <th>EDITAR</th>

        </tr>
        <?php
        include("conexion_bd.php");
        $sql = $conexion->query("SELECT * from libro");
        while ($datos = $sql->fetch_object()) { ?>
            <tr>
                <td><?= $datos->id_libro ?></td>
                <td><?= $datos->titulo ?></td>
                <td><?= $datos->cantidad_disponible ?></td>
                <td><?= $datos->num_edicion ?></td>
                <td><?= $datos->precio ?></td>
                <td>
                    <a href="modificar_libro.php?id=<?= $datos->id_libro ?>" class="bi bi-pencil-square">Editar</a>
                    <a onclick="return eliminar()" href="gestionLibros.php?id=<?= $datos->id_libro ?>" class="bi bi-trash3-fill me-1" style="color: red;">Eliminar</a>
                </td>
            </tr>
        <?php
        }
        ?>

        <!-- Agregar más filas con datos de libros -->
    </table>
</div>


<div class="row">
                <p class="mt-2 mb-1">Gestión de Libros</p>
                <form class="col-md-4 mb-1 d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success btn-sm" type="submit">Buscar</button>
                </form>
                <a class="a-ref ms-1 bi bi-plus-square" href="formulario_libro.php" style=" text-decoration: none"> Añadir Libro</a>
                <?php
                include("conexion_bd.php");
                include("controlador/eliminarLibro.php");
                ?>
            </div>