<?php
include("Conexion/conexion_bd.php");
if (isset($_POST['submit']) && $_POST['submit'] == 'buscarTitulo') {
    if (empty($_POST['buscarNombre'])) {
    } else {
        $buscartitulo = $_POST['buscarNombre'];
        $result = $conexion->query("SELECT * from titulo_libro WHERE nombre LIKE '%$buscartitulo%' ORDER BY id_titulo ASC ");
        $registros  = array();
        while ($row = $result->fetch_assoc()) {
            $registros[] = $row;
        }
        return $registros;
    }
}


