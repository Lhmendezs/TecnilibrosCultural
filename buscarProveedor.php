<?php 
 if(isset($_GET['enviar'])){
    include("conexion_bd.php");
        $buscar=$_GET["buscar"];
        
        if(isset($_GET['buscar'])){
            echo "SELECT * FROM proveedor WHERE nombre_proveedor LIKE '$buscar%' OR id LIKE '%$buscar%' ORDER BY id DESC";
        }
        
        

    }
 
?>