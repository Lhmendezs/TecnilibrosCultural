<?php
// Verificar si se ha enviado el formulario de registro
if(isset($_POST['submit']) && $_POST['submit'] == 'CrearLibro') {
    // Verificar si los campos del formulario están vacíos
    if(empty($_POST['titulo']) || empty($_POST['cantidad']) || empty($_POST['edicion']) || empty($_POST['precio']) || empty($_POST['isbn'])
    || empty($_POST['categoria'])|| empty($_POST['autor']) || empty($_POST['librero'])) {
         // Mensaje de error para la alerta
        
    } else {
        // Incluir el archivo de conexión a la base de datos
        include("Conexion/conexion_bd.php");

        // Recibir los datos del formulario
        $titulo = $_POST['titulo'];
        $cantidad = $_POST['cantidad'];
        $edicion= $_POST['edicion'];
        $precio = $_POST['precio'];
        $isbn = $_POST['isbn'];
        $librero = $_POST['librero'];
        $categoria = $_POST['categoria'];
        $autor = $_POST['autor'];
        
        $idcategoria = explode(',',$categoria);
        $idautor= explode(',',$autor);
        $intcategoria= array();
        $intautor= array();
        foreach ($idcategoria as $idCat) {
            // Convertir a entero y agregar a la matriz
            $intcategoria[] = (int) trim($idCat);
        }
        
        foreach ($idautor as $idAut) {
            // Convertir a entero y agregar a la matriz
            $intautor[] = (int) trim($idAut);
        }



        // Consulta preparada para insertar datos en la base de datos
        $query = "INSERT INTO libros (id_titulo, cantidad_disponible, num_edicion, precio, ISBN, librero) VALUES (?, ?, ?, ?,?,?)";
        $statement = mysqli_prepare($conexion, $query);
        
        // Verificar si la preparación de la consulta tuvo éxito
        if ($statement === false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }

        // Vincular los parámetros
        mysqli_stmt_bind_param($statement, "iiiiis", $titulo, $cantidad,$edicion, $precio,$isbn,$librero);

        // Ejecutar la consulta
        $result = mysqli_stmt_execute($statement);
        if($result) {
            $id_libro = mysqli_insert_id($conexion);
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Proveedor añadido con exito!
           <a href="gestionProveedores.php"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
          </div>';
        } else {
            // Error: mostrar un mensaje de error o redirigir al usuario a una página de error
            echo "Error al registrar usuario: " . mysqli_error($conexion);
        }


        $query2= "INSERT INTO libro_categoria(id_libro,id_categoria) VALUES (?,?)";
        $statement = mysqli_prepare($conexion, $query2);

        if ($statement=== false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }

        foreach($intcategoria as $idC){
            mysqli_stmt_bind_param($statement, "ii", $id_libro, $idC);
            $result = mysqli_stmt_execute($statement);
            if (!$result) {
                // Mostrar un mensaje de error si falla la ejecución de la consulta
                die("Error al ejecutar la consulta: " . mysqli_error($conexion));
            }
        }

        

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

        $query3= "INSERT INTO libro_autor (id_libro,id_autor) VALUES (?,?)";
        $statement = mysqli_prepare($conexion, $query3);
        if ($statement=== false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }

        foreach($intautor as $idA){
            mysqli_stmt_bind_param($statement, "ii", $id_libro, $idA);
            $result = mysqli_stmt_execute($statement);
            if (!$result) {
                // Mostrar un mensaje de error si falla la ejecución de la consulta
                die("Error al ejecutar la consulta: " . mysqli_error($conexion));
            }
        }

       

        // Ejecutar la consulta
        $result = mysqli_stmt_execute($statement);
        if($result) {
            $id_libro = mysqli_insert_id($conexion);
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
