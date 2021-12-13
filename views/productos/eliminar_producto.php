<?php
    
    $id = $_GET["id_producto"];

    #realiza la conexion con la base de datos
    require "../../db/conexion_db.php";

    #elimina la entrada solicitada
    $consulta_eliminar =mysqli_query($conexion, "Delete from productos where id_producto = $id");

    require "listar_productos.php"
    
?>