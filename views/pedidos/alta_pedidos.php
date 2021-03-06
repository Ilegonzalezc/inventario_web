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
    <link rel="stylesheet" href="../../css/formulario_pedido_nombre.css">
    <link rel="stylesheet" href="../../css/footer.css">

    <title>Pedidos|Alta</title>

</head>

<body>

    <?php

    # conecto con la base de datos
    require "../../db/conexion_db.php";

    # Select del nombre e id de los clientes
    $consulta = mysqli_query($conexion, "SELECT Nombre, id_cliente FROM  clientes");

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

            <section id="form_alta_producto">

                <h2 class="form_titulo">Seleccione un cliente de la lista</h2>

                <form id="formulario" method="get" action="ingresar_alta_pedidos.php">

                    <label for="nombre_cliente"> Nombre
                        <select name="nombre_cliente">

                            <?php
                            while ($fila = mysqli_fetch_array($consulta)) {
                            ?>
                                <option value="<?php echo $fila["id_cliente"] ?>">
                                    <?php echo $fila["Nombre"] ?>
                                <?php } ?>
                        </select>
                    </label>

                    <label for="fecha" class="form_label"> Fecha<span class="asterisco">*</span>
                        <input type="date" name="fecha" class="fecha" min="2010-12-31" required>
                    </label>

                    <input type="submit" class="boton" value="Enviar" name="submit">
                </form>
            </section>
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