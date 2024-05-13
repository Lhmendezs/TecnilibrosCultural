<?php 
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
    header("Location: index.php");
    exit();
}else{
    header("Location: inicio.php");
}

// Mostrar mensaje de bienvenida
echo "Bienvenido, " . $_SESSION['usuario'] . "!<br>";

// Agregar un botón para cerrar sesión
echo '<a href="cerrar_sesion.php">Cerrar sesión</a>';
?>
?>