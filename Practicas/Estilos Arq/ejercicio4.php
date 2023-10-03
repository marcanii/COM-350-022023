<?php
// conectarse a la bd_personas
$conexion = mysqli_connect("localhost", "root", "", "bd_personas");
// verificar la conexion
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}
// ejecutar la consulta
$consulta = "SELECT * FROM ciudadano";
$resultado = mysqli_query($conexion, $consulta);
// verificar el resultado
if (!$resultado) {
    echo "Error: No se pudo ejecutar la consulta $consulta" . PHP_EOL;
    echo "errno de depuración: " . mysqli_errno($conexion) . PHP_EOL;
    exit;
}
// mostrar el resultado
echo "<table border='1'> <tr> <td> CI </td> <td> Nombre </td> <td> Fecha </td> </tr>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    // mostrar en una tabla
    echo "<tr> <td>" . $fila['ci'] . "</td> <td>" . $fila['nombre'] . "</td> <td>" . $fila['fecha'] . "</td> </tr>";
}
echo "</table>";
?>