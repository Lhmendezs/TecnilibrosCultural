<?php
// CREAR CATEGORIA
if(isset($_POST['submit2']) && $_POST['submit2'] == 'CrearCat') {
    // Verificar si los campos del formulario están vacíos
    if(empty($_POST['addCat'])) {
         // Mensaje de error para la alerta
        
    } else {
        // Incluir el archivo de conexión a la base de datos
        include("Conexion/conexion_bd.php");

        // Recibir los datos del formulario
        $nombrecat = $_POST['addCat'];
        // Consulta preparada para insertar datos en la base de datos
        $query = "INSERT INTO categoria (nombre_categoria) VALUES (?)";
        $statement = mysqli_prepare($conexion, $query);

        // Verificar si la preparación de la consulta tuvo éxito
        if ($statement === false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }

        // Vincular los parámetros
        mysqli_stmt_bind_param($statement, "s", $nombrecat);

        // Ejecutar la consulta
        $result = mysqli_stmt_execute($statement);

        if($result) {
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Proveedor añadido con exito!
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