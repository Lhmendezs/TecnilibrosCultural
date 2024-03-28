<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-1 shadow" id="menu">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mx-auto">
                    <a class="navbar-brand" href="inicio.php">
                        <img src="imagenes/icon.png" alt="" style="height: 30px" />
                        <span class="fs-5 fw-bold mx-auto">Tecnilibros Cultural</span>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'gestionLibros.php') echo 'active'; ?>" href="gestionLibros.php" style="<?php if (basename($_SERVER['PHP_SELF']) == 'gestionLibros.php') echo 'text-decoration: underline;'; ?>">Libros</a>
                    
                        <li class="nav-item">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'buscarLibros.php') echo 'active'; ?>" href="buscarLibros.php" style="<?php if(basename($_SERVER['PHP_SELF']) == 'buscarLibros.php') echo 'text-decoration: underline;'; ?>">Gestion Libros</a>
                    </li></li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'gestionProveedores.php') echo 'active'; ?>" href="gestionProveedores.php" style="<?php if (basename($_SERVER['PHP_SELF']) == 'gestionProveedores.php') echo 'text-decoration: underline;'; ?>">Proveedores</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'ventas.php') echo 'active'; ?>" href="ventas.php" style="<?php if(basename($_SERVER['PHP_SELF']) == 'ventas.php') echo 'text-decoration: underline;'; ?>">Ventas</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="gestionProveedores.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
</body>

</html>