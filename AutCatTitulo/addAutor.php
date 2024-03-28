<?php
if (isset($_POST['submit3']) && $_POST['submit3'] == 'CrearAut') {
    // Verificar si los campos del formulario están vacíos
    if (empty($_POST['addAut'])) {
        // Mensaje de error para la alerta

    } else {
        // Incluir el archivo de conexión a la base de datos
        include("Conexion/conexion_bd.php");

        // Recibir los datos del formulario
        $nombre = $_POST['addAut'];
        // Consulta preparada para insertar datos en la base de datos
        $query = "INSERT INTO autor (nombre_autor) VALUES (?)";
        $statement = mysqli_prepare($conexion, $query);

        // Verificar si la preparación de la consulta tuvo éxito
        if ($statement === false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }

        // Vincular los parámetros
        mysqli_stmt_bind_param($statement, "s", $nombre);

        // Ejecutar la consulta
        $result = mysqli_stmt_execute($statement);

        if ($result) {
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Autor añadido con exito!
               <a href="buscarLibros.php"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
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
}
