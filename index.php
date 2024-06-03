<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnilibros Cultural</title>
    <link rel="icon" href="imagenes/icon.png" />
    <link rel="stylesheet" href="http://localhost/pruebas/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounder-5 p-3 bg-white shadow box-area">

            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image">
                    <img src="imagenes/0c93e7f5-dcd1-4a0e-9021-acc0afbb0f5f.jpg" class="img-fluid" style="width: 450px;">
                </div>
                <p></p>
            </div>

            <div class="col-md-6 right-box">
            <?php include("registro.php"); ?>
                <form class="login-form" action="" method="post">
                    <div class="mb-3">
                        <h1>Bienvenidos a Tecnilibros Cultural</h1>
                    </div>
                    <?php
                    include("Conexion/conexion_bd.php");
                    include("Controlador/controladorLogin.php");
                    
                    ?>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Usuario">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="btniniciar">Iniciar Sesión</button>
                        <p class="message">No estás registrado? <a href="#" id="show-register-form">Crea tu cuenta</a></p>
                    </div>
                </form>

                <form class="register-form" method="post">
                    <!-- Formulario de registro -->
                    <div class="mb-3">
                        <h1>Registro a Tecnilibros Cultural</h1>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nombre_usuario" placeholder="Usuario" />
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" />
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="correo_electronico" placeholder="Email" />
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="submit" value="Crear cuenta" class="btn btn-primary">Crear cuenta</button> <!-- Cambiado a input con tipo submit -->
                        <p class="message">Ya registrado? <a href="#" id="show-login-form">Inicia sesión</a></p>
                    </div>

                </form>
            </div>


        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Ocultar el formulario de registro inicialmente
            $(".register-form").hide();

            // Alternar entre formularios al hacer clic en los enlaces
            $("#show-register-form").click(function() {
                $(".login-form").hide();
                $(".register-form").show();
                return false;
            });

            $("#show-login-form").click(function() {
                $(".register-form").hide();
                $(".login-form").show();
                return false;
            });
        });
    </script>

    <script src="http://localhost/pruebas/assets/js/bootstrap.min.js"></script>
</body>

</html>