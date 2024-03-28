<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagenes/icon.png" />
    <title>Inicio - Tecnilibros Cultural</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <!-- Barra de tareas -->
    <?php include("../vistas/navbar.php") ?>
    <div class="container-fluid ">
        <div class="row">


            <div class="container-fluid">
                <div class="row border-bottom border-top-0  border-secondary">
                    <h3 class="mt-2 mb-1 ">Busca titulo</h3>
                    <!-- COL -->
                    <div class="col-sm-4 mb-1">
                        <form >
                        <input  onkeyup="buscar($('#buscar').val())" class="form-control" name="buscar">
                        </form>
                           
                            
                     
                    </div>
                    <!-- COL -->

                    <div class="col-sm-8">
                        <div class="card-body">
                                <div id="datos_buscador" class="container"></div>
                        </div>

                    </div>
                </div>

        <script type="text/javascript">
            function buscar(buscar) {
                var parametros = {"buscar":buscar};
                $.ajax({
                   data:parametros,
                   type:'POST',
                   url:'buscarP.php',
                   success: function(data){
                document.getElementById("datos_buscador").innerHTML = data;
                   }
                });
            }
        </script>


</body>

</html>