<?php
include("Conexion/conexion_bd.php");

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $usuario = $_POST["username"];
    $contrasena = $_POST["password"];

    $consulta = "SELECT * FROM usuarios WHERE email_usuario = ? AND password = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $filas=mysqli_fetch_array($resultado);

    if ($resultado->num_rows == 1) {
        // Usuario autenticado correctamente
        if($filas['rol']== "Administrador"){
            header("Location: inicio.php");
        }else{
            header("Location: empleadoInicio.html");
        }
        exit();
    } else {
        // Acceso denegado
        echo '<p style="color: red;">Acceso denegado. Por favor, verifique sus credenciales.</p>';
    }
} else {
    if (isset($_POST['btniniciar'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
          echo '<p style="color: red;">Los campos no pueden estar vacíos.</p>';
        } 
    }
}

?>