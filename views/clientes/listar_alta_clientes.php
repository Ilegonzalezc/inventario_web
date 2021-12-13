
    <?php
            #obteniendo las variables
            $nombre = ($_GET["nombre"]);
            $apellidos = ($_GET["apellidos"]);
            $direccion = ($_GET["direccion"]);
            $telefono = ($_GET["telefono"]);
            $email = ($_GET["email"]);
            $no_tarjeta = ($_GET["no_tarjeta"]);
            
            #conexión a la base de datos
            require "../../db/conexion_db.php";

            $consulta_insert = "INSERT INTO clientes VALUES('','$nombre','$apellidos','$direccion','$telefono','$email','$no_tarjeta')";

            $consulta = mysqli_query($conexion, $consulta_insert) or die ("Se ha producido el siguiente error: " .mysqli_error($conexion));
            header("location:alta_cliente.html");

    ?>

    


    
