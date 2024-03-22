<?php
if (!empty($_GET["id"])) {
    include("Conexion/conexion_bd.php");
    $id = $_GET["id"];

    $query = "DELETE FROM proveedor WHERE id_proveedor = ?";
    $statement = mysqli_prepare($conexion, $query);

    // Verificar si la preparación de la consulta tuvo éxito
    if ($statement === false) {
        // Mostrar un mensaje de error si la preparación de la consulta falló
        die("Error al preparar la consulta: " . mysqli_error($conexion));
    }

    // Vincular los parámetros
    mysqli_stmt_bind_param($statement, "i", $id);

    // Ejecutar la consulta
    $result = mysqli_stmt_execute($statement);

    if ($result) {
        // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Eliminacion exitosa!
           <a href="gestionProveedores.php"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
          </div>';
    } else {
        // Error: mostrar un mensaje de error o redirigir al usuario a una página de error
        echo "Error al registrar usuario: " . mysqli_error($conexion);
    }

    // Cerrar la declaración preparada
    mysqli_stmt_close($statement);

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
