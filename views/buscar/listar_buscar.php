<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/5d1facf5a3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/fontello.css">
    <link rel="stylesheet" href="../../css/banner.css">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/footer.css">

    <title>Buscar</title>

</head>

<body>
    <header>
        <div class="contenedor">

            <div class="encabezado">
                <h1>Tú tienda de informática</h1>
                <p>Inventario </p>
            </div>

            <nav class="menu">
                <a href="../../index.html"> Inicio</a>
                <a href="../clientes/alta_cliente.html"> Alta cliente</a>
                <a href="../clientes/listar_clientes.php"> Mostrar clientes</a>
                <a href="../productos/alta_productos.html"> Alta productos</a>
                <a href="../productos/listar_productos.php"> Mostrar productos</a>
                <a href="../pedidos/alta_pedidos.php"> Alta pedidos</a>
                <a href="../pedidos/listar_pedidos.php"> Mostrar pedidos</a>
                <a href="buscar.html">Buscar</a>
            </nav>
        </div>
    </header>

    <?php

    $fecha = $_GET["fecha"];

    require "../../db/conexion_db.php";

    $consulta_select = "SELECT DISTINCT clientes.nombre, clientes.apellidos, clientes.email, productos.Nombre, detalle_pedidos.Cantidad, pedidos.fecha
    FROM clientes 
    JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente
    JOIN detalle_pedidos ON pedidos.id_pedido = detalle_pedidos.id_pedido
    JOIN productos ON detalle_pedidos.id_producto = productos.id_producto
    WHERE year(fecha)=$fecha";

    $consulta = mysqli_query($conexion, $consulta_select);

    echo "<table>";

    echo "<tr>";
    echo "<th> Nombre     </th>
          <th> Apellidos  </th>
          <th> Email      </th>
          <th> Producto   </th>
          <th> Cantidad   </th>
          <th> Fecha      </th>";
    echo "</tr>";

    while ($fila = mysqli_fetch_array($consulta)) {

        echo "<tr>";
        echo "<td>" . $fila[0] . "</td><td>"
            . $fila[1] . "</td><td>"
            . $fila[2] . "</td><td>"
            . $fila[3] . "</td><td>"
            . $fila[4] . "</td><td>"
            . $fila[5] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>

    <footer>
        <div class="contenedor">
            <p class="copy"> Tu tienda de informática &copy; 2021</p>

            <div class="sociales">
                <a class="icon-twitter" href="#"></a>
                <a class="icon-instagram" href="#"></a>
                <a class="icon-googleplus" href="#"></a>
            </div>
        </div>
    </footer>



</body>

</html>