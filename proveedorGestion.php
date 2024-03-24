<?php
include("Conexion/conexion_bd.php");
  
    

    function mostrarProveedores(){
        global  $conexion;
        $result = $conexion->query("SELECT * from proveedor");
        $registros  = array();
        while($row = $result->fetch_assoc()){
            $registros[]= $row;
        }
        return $registros;
    }
?>