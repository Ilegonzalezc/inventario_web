
        <?php

        #conexión a la base de datos
        require "../../db/conexion_db.php";

        #recupero las variables
        $id_producto = $_GET["nombre_producto"];
        $cantidad = $_GET["cantidad"];
        $id_cliente = $_GET["id_cliente"];
        $fecha = $_GET["fecha"];
       
        # recupero el ultimo pedido
        $consulta_select_pedidos = mysqli_query($conexion, "SELECT id_pedido FROM Pedidos order by id_pedido desc limit 1");

        $id_pedido = mysqli_fetch_array($consulta_select_pedidos);
        $id_pedido = $id_pedido["id_pedido"];

        #Insert a la tabla detalle-pedido
        $consulta_insert_detalle_pedido = "INSERT INTO detalle_pedidos (id_pedido, id_producto, Cantidad) VALUES('$id_pedido', '$id_producto', '$cantidad')";

        $consulta = mysqli_query($conexion, $consulta_insert_detalle_pedido) or die("Se ha producido el siguiente error: " .mysqli_error($conexion));
        header("location:listar_ultimo_pedido.php?id_cliente=$id_cliente&fecha=$fecha");

        ?>

        

    