<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagenes/icon.png" />
    <title>Inicio - Tecnilibros Cultural</title>
    <link rel="stylesheet" href="http://localhost/tecnilibros_cultural-master/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
</head>

<body>

    <!-- Barra de tareas -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-1 shadow" id="menu">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <a class="navbar-brand" href="index.php">
                        <img src="imagenes/icon.png" alt="" style="height: 30px" />
                        <span class="fs-5 fw-bold mx-auto">Tecnilibros Cultural</span>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestionProveedores.php">Proveedores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <h1>Añadir Proveedor</h1>
    <?php 
     include("anadirProveedor.php");
    ?>
        <form  class="libroA-form" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre del Proveedor</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre del proveedor" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="emailProveedor" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefonoProveedor" placeholder="Teléfono" required>
            </div>
            <button type="submit"  name="submit" value="CrearProveedor" class="btn btn-primary">Añadir</button>
        </form>
        <a href="gestionProveedores.php" class="bi bi-arrow-return-left">Regresar</button></a>
    </div>


    <script src="http://localhost/tecnilibros_cultural-master/assets/js/bootstrap.min.js"></script>
</body>

</html>