<?php
    if(!empty($_GET["id"])){
        include("conexion_bd.php");
        $id=$_GET["id"];
        
        $query = "DELETE FROM libro WHERE id_libro = ?";
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
            echo "<div class='alert alert-success' role='alert'>Eliminador con exito</div>";
        } else {
            // Error: mostrar un mensaje de error o redirigir al usuario a una página de error
            echo "Error al registrar usuario: " . mysqli_error($conexion);
        }

        // Cerrar la declaración preparada
        mysqli_stmt_close($statement);

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
    }
?>