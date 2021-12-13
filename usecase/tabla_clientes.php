<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

</head>

<body>

<?php

$consulta = mysqli_query($conexion, "SELECT * FROM clientes");

echo "<table>";

echo "<tr>";
    echo "<th> ID                </th>
          <th> Nombre            </th>
          <th> Apellidos          </th>
          <th> Email             </th>
          <th> Teléfono          </th>
          <th> Dirección         </th>
          <th> Numero de tarjeta </th>";
echo "</tr>";

while($fila = mysqli_fetch_array($consulta)){

echo "<tr>";
    echo "<td>".$fila['id_cliente']."</td><td>"
               .$fila['Nombre']."</td><td>"
               .$fila['Apellidos']."</td><td>"
               .$fila['Email']."</td><td>"
               .$fila['Telefono']."</td><td>"
               .$fila['Direccion']."</td><td>"
               .$fila['No_tarjeta']."</td>";
echo "</tr>";
}
echo "</table>";


?>
    
</body>

</html>

