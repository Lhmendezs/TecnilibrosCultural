<?php
if (!empty($_POST["btnmodificarBook"])) {
    if (
        empty($_POST['bTitulo']) || empty($_POST['bCantidad']) || empty($_POST['bEdicion']) || empty($_POST['bPrecio']) ||
        empty($_POST['bIsbn']) || empty($_POST['bLibrero']) || empty($_POST['bCtegoria']) || empty($_POST['bAutor'])
    ) {
        // Mensaje de error para la alerta
        $mensaje = "Error: Uno de los campos está vacío.";

        // Generar el script JavaScript que mostrará la alerta
        echo "<script>alert('$mensaje');</script>";
    } else {
        include("Conexion/conexion_bd.php");

        // Recibir los datos del formulario
        $id_libro = $_POST['idLibro'];
        $id_titulo= $_POST['bTitulo'];
        $cantidad = $_POST['bCantidad'];
        $edicion = $_POST['bEdicion'];
        $precio = $_POST['bPrecio'];
        $isb=$_POST['bIsbn'];
        $librero=$_POST['bLibrero'];
        $categoria=$_POST['bCtegoria'];
        $autor=$_POST['bAutor'];
        
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
        $query = "UPDATE libros SET id_titulo = ?, cantidad_disponible = ?, num_edicion = ?, precio = ?, ISBN = ?, librero=? WHERE id_libro = ?";
        $statement = mysqli_prepare($conexion, $query);

        // Verificar si la preparación de la consulta tuvo éxito
        if ($statement === false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }
       
        // Vincular los parámetros
        mysqli_stmt_bind_param($statement, "iiiiisi", $id_titulo, $cantidad, $edicion, $precio, $isb, $librero, $id_libro);

        // Ejecutar la consulta
        $result = mysqli_stmt_execute($statement);

        if ($result) {
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo "<div class='alert alert-success' role='alert'>Actualizacion exitosa</div>";
        } else {
            // Error: mostrar un mensaje de error o redirigir al usuario a una página de error
            echo "Error al registrar usuario: " . mysqli_error($conexion);
        }

        $queryDelete = "DELETE lc, la FROM libro_categoria lc LEFT JOIN libro_autor la ON lc.id_libro = la.id_libro WHERE lc.id_libro = ?";

        $statement = mysqli_prepare($conexion, $queryDelete);

        // Verificar si la preparación de la consulta tuvo éxito
        if ($statement === false) {
            // Mostrar un mensaje de error si la preparación de la consulta falló
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }
       
        // Vincular los parámetros
        mysqli_stmt_bind_param($statement, "i", $id_libro);

        // Ejecutar la consulta
        $result = mysqli_stmt_execute($statement);

        if ($result) {
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo "<div class='alert alert-success' role='alert'>Eliminacion exitosa</div>";
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
            // Éxito: redirigir al usuario a alguna página de éxito o mostrar un mensaje
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Proveedor añadido con exito!
           <a href="gestionProveedores.php"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
          </div>';
        } else {
            // Error: mostrar un mensaje de error o redirigir al usuario a una página de error
            echo "Error al registrar usuario: " . mysqli_error($conexion);
        }


        //BORRA RELACIONES 

        // Cerrar la declaración preparada
        mysqli_stmt_close($statement);

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
    }
}
