<?php
include("../Conexion/conexion_bd.php");

// Verificar si se recibió el parámetro de búsqueda
if(isset($_POST['buscar'])) {
  
    // Realizar la búsqueda en la base de datos
    $buscador = mysqli_query($conexion, "SELECT * FROM titulo_libro WHERE nombre LIKE '%cien%' ORDER BY id_titulo ASC;");

    // Verificar si la consulta se ejecutó correctamente
    if($buscador) {
        // Mostrar resultados si se encontraron coincidencias
        if(mysqli_num_rows($buscador) > 0) {
            while($resultado = mysqli_fetch_assoc($buscador)) {
                echo '<p class="card-text">' . $resultado["id_titulo"] . ' - ' . $resultado["nombre"] . '</p>';
            }
        } else {
            // Mostrar un mensaje si no se encontraron resultados
            echo '<p>No se encontraron resultados para la búsqueda: ' . $buscar . '</p>';
        }
    } else {
        // Manejar el caso de que ocurra un error en la consulta
        echo '<p>Error al ejecutar la consulta: ' . mysqli_error($conexion) . '</p>';
    }
} else {
    // Manejar el caso en que no se haya proporcionado el parámetro de búsqueda
    echo '<p>No se proporcionó un término de búsqueda.</p>';
}
?>

        


