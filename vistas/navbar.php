<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/tecnilibros_cultural-master/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-1 shadow" id="menu">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <a class="navbar-brand" href="inicio.php">
                        <img src="imagenes/icon.png" alt="" style="height: 30px" />
                        <span class="fs-5 fw-bold mx-auto">Tecnilibros Cultural</span>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'gestionLibros.php') echo 'active'; ?>" href="gestionLibros.php" style="<?php if (basename($_SERVER['PHP_SELF']) == 'gestionLibros.php') echo 'text-decoration: underline;'; ?>">Libros</a>
                    </li>
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
    <script src="http://localhost/tecnilibros_cultural-master/assets/js/bootstrap.min.js"></script>
</body>

</html>