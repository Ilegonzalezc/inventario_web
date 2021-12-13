<?php
    
    $id = $_GET["id_cliente"];

    #realiza la conexion con la base de datos
    require "../../db/conexion_db.php";

    #elimina la entrada solicitada
    $consulta_eliminar =mysqli_query($conexion, "Delete from clientes where id_cliente = $id");

    require "listar_clientes.php"
    
?>