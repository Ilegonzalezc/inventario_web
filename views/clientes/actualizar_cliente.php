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

    <title>Clientes|Actualizar</title>

</head>

<?php

$id_cliente = $_GET(id_cliente);

require "../../db/conexion_db.php";

$consulta_select_actualizar = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
$consulta = mysqli_query($conexion, $consulta_select_actualizar);

$fila = mysqli_fetch_array($consulta);

?>

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
                <a href="../buscar/buscar.html">Buscar</a>
            </nav>
        </div>
    </header>

    
    <main>
        <div class="contenedor">
            <section id="form_alta_cliente">

                <h2 class="form_titulo">Actualización de los datos del cliente</h2>

                <form id="formulario" method="get" action="actualizar.php">

                    <label for="nombre" class="form_label">Nombre<span class="asterisco">*</span><input type="text"
                            name="nombre" class="nombre" value="<?php echo $fila["Nombre"]?>" autofocus required>
                    </label>

                    <label for="apellidos" class="form_label">Apellidos<span class="asterisco">*</span><input
                            type="text" name="apellidos" class="apellido" value="<?php echo $fila["Apellidos"] ?>" required>
                    </label>

                    <label for="email" class="form_label">Email<span class="asterisco">*</span><input type="email"
                            name="email" class="email" value="<?php echo $fila["Email"] ?>" required>
                    </label>

                    <label for="telefono" class="form_label">Teléfono<span class="asterisco">*</span><input type="tel"
                            name="telefono" class="telefono" pattern="[0-9]{9}" title="introduce un número de teléfono de 9 digitos" value="<?php echo $fila["Telefono"] ?>" required>
                    </label>

                    <label for="dirección" class="form_label">Dirección<span class="asterisco">*</span><input
                            type="text" name="direccion" class="direccion" <?php echo $fila["Direccion"] ?>value="" required>
                    </label>

                    <label for="no_tarjeta" class="form_label">No. Tarjeta<span class="asterisco">*</span><input
                            type="text" name="no_tarjeta" class="no_tarjeta" pattern="[0-9]{16}" title="introduce un número de 16 digitos" value="<?php echo $fila["No_tarjeta"] ?>"
                            required>
                    </label>

                    <input type="submit" value="Actualizar" class="boton">
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