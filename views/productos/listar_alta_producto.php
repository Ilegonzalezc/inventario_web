
    <?php

    $nombre = $_GET["nombre"];
    $marca = $_GET["marca"];
    $stock = $_GET["stock"];
    
    require "../../db/conexion_db.php";

    $consulta_insert = "INSERT INTO productos VALUES('','$nombre','$marca','$stock')";

    $consulta = mysqli_query($conexion, $consulta_insert) or die ("Se ha producido el siguiente error: " .mysqli_error($conexion));
    header("location:alta_productos.html");

    ?>

    