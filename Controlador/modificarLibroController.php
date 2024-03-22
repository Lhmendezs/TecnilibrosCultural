<?php
if (!empty($_POST["btnmodificar"])) {
    if (empty($_POST['titulo']) || empty($_POST['cantidad']) || empty($_POST['edicion']) || empty($_POST['precio'])) {
        // Mensaje de error para la alerta
        $mensaje = "Error: Uno de los campos está vacío.";

        // Generar el script JavaScript que mostrará la alerta
        echo "<script>alert('$mensaje');</script>";
    } else {
        include("conexion_bd.php");

        // Recibir los datos del formulario
        $id= $_POST['idBook'];
        $titulo = $_POST['titulo'];
        $cantidad = $_POST['cantidad'];
        $edicion = $_POST['edicion'];
        $precio = $_POST['precio'];
        // Consulta preparada para insertar datos en la base de datos
        $query = "UPDATE libro SET titulo = ?, cantidad_disponible = ?, num_edicion = ?, precio = ? WHERE id_libro = ?";
        $statement = mysqli_prepare($conexion, $query);

        // Verificar si la preparación de la consulta tuvo éxito
        if ($statement === false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }

        // Vincular los parámetros
        mysqli_stmt_bind_param($statement, "siidi", $titulo, $cantidad, $edicion, $precio,$id);

        // Ejecutar la consulta
        $result = mysqli_stmt_execute($statement);

        if ($result) {
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo "<div class='alert alert-success' role='alert'>Actualizacion exitosa</div>";
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
