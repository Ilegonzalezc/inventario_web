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
    <link rel="stylesheet" href="../../css/formulario_pedido.css">
    <link rel="stylesheet" href="../../css/footer.css">

    <title>Pedidos|Alta</title>

</head>


<body>

    <?php

    #Conexion a la base de datos
    require "../../db/conexion_db.php";

    #recupero el ID cliente y fecha
    $id_cliente = $_GET["nombre_cliente"];
    $fecha = $_GET["fecha"];

    #guardo el valor en la tabla pedidos
    $consulta_insert = "INSERT INTO pedidos (fecha, id_cliente) VALUES('$fecha', $id_cliente)";
    $consulta = mysqli_query($conexion, $consulta_insert);

    #Select de los nombres de los productos
    $consulta_select_productos = mysqli_query($conexion, "SELECT Nombre, id_producto FROM  productos");

    ?>

    <header>
        <div class="contenedor">

            <div class="encabezado">
                <h1>Tú tienda de informática</h1>
                <p>Inventario </p>

            </div>

            <nav class="menu">
                <a href="../../index.html"> Inicio</a>
                <a href="../clientes/alta_cliente.html"> Alta clientes</a>
                <a href="../clientes/listar_clientes.php"> Mostrar clientes</a>
                <a href="../productos/alta_productos.html"> Alta productos</a>
                <a href="../productos/listar_productos.php"> Mostrar productos</a>
                <a href="../pedidos/alta_pedidos.php"> Alta pedidos</a>
                <a href="../pedidos/listar_pedidos.php"> Mostrar pedidos</a>
                <a href="../buscar/buscar.html">Buscar</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="contenedor">

            <h2 class="form_titulo">Ya puede realizar su pedido!</h2>

            <form id="formulario" method="get" action="listar_alta_pedidos.php">

                <label for="nombre_producto">Producto
                    <select name="nombre_producto">
                        <?php
                        while ($fila = mysqli_fetch_array($consulta_select_productos)) {
                        ?>

                            <option value="<?php echo $fila["id_producto"] ?>">
                                <?php echo $fila["Nombre"] ?>

                            <?php } ?>
                    </select>

                </label>

                <label for="cantidad" class="form_label">Cantidad
                    <input type="number" name="cantidad" class="cantidad" min="1" required>
                </label>

                <input type="hidden" name="id_cliente" value="<?php echo $id_cliente ?>">
                <input type="hidden" name="fecha" value="<?php echo $fecha ?>">

                <input type="submit" value="Seleccionar">

            </form>

        </div>
    </main>

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