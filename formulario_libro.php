<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagenes/icon.png" />
    <title>Inicio - Tecnilibros Cultural</title>

</head>

<body>

    <!-- Barra de tareas -->
    <?php include("vistas/navbar.php") ?>



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 ">
                <h1 class=" text-center">Añadir Libro</h1>
                <?php include("Controlador/anadirLibro.php")?>
                <div class="card mx-auto border-0" style="max-width: 500px;">
                    <form  method="post">
                        <div class="mb-3">
                            <label class="form-label">Titulo del libro</label>
                            <input type="number" class="form-control " name="titulo" placeholder="Título del libro" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edicion</label>
                            <input type="number" class="form-control" name="edicion" placeholder="Edición del libro" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number" class="form-control" name="precio" placeholder="Precio del libro" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ISBN</label>
                            <input type="number" class="form-control" name="isbn" placeholder="ISBN" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">LIBRERO</label>
                            <input type="text" class="form-control" name="librero" placeholder="Librero" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">CATEGORIA</label>
                            <input type="text" class="form-control" name="categoria" placeholder="Categoria" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">AUTOR</label>
                            <input type="text" class="form-control" name="autor" placeholder="Autor" required>
                        </div>
                        <button type="submit" name="submit" value="CrearLibro" class="btn btn-primary">Añadir</button>
                        <button class="btn btn-primary"onclick="abrirNuevaPestana()">Buscar</button>
                      
                    </form>
                </div>



            </div>
        </div>

    </div>

    <script type="text/javascript">
        function abrirNuevaPestana() {
            // Abrir una nueva pestaña utilizando JavaScript
            var nuevaPestana = window.open('buscarLibros.php', '_blank');
            // Puedes reemplazar 'http://www.ejemplo.com' con la URL que desees abrir en la nueva pestaña
            nuevaPestana.focus(); // Hacer que la nueva pestaña sea la pestaña activa
        }
    </script>


</body>

</html>