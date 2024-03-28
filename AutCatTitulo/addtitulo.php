<?php
// Verificar si se ha enviado el formulario de registro
if(isset($_POST['submit']) && $_POST['submit'] == 'CrearTitulo') {
    // Verificar si los campos del formulario están vacíos
    if(empty($_POST['titulo2'])) {
         // Mensaje de error para la alerta
        
    } else {
        // Incluir el archivo de conexión a la base de datos
        include("Conexion/conexion_bd.php");

        // Recibir los datos del formulario
        $nombre = $_POST['titulo2'];
        // Consulta preparada para insertar datos en la base de datos
        $query = "INSERT INTO titulo_libro (nombre) VALUES (?)";
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

        if($result) {
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            titulo añadido con exito!
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
}

?>