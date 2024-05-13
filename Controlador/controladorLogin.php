<?php
include("Conexion/conexion_bd.php");

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $usuario = $_POST["username"];
    $contrasena = $_POST["password"];

    $consulta = "SELECT email_usuario, password, rol FROM usuarios WHERE email_usuario = ? AND password = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    $filas = mysqli_fetch_array($resultado);
    var_dump($filas);
    if ($resultado->num_rows == 1) {

        if ($filas['rol'] == "Administrador") {
            session_start();
            header('Location: inicio.php');
                exit();
      
        }else{
            if($filas['rol'] == "Empleado"){
                session_start();
                header('Location: sesionEmpleado.php');
            }
        }
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
