<?php
$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

$sql = "SELECT primApell, secApell, nombre, curp FROM comprobante";


$result = mysqli_query($con, $sql);

echo "<link rel='stylesheet' type='text/css' href='estilotable.css' />";
echo "<br>";
echo "<table border='1' style='width:100%'>";
echo "<tr>";
echo "<td>" . "PRIMER APELLIDO" . "</td>";
echo "<td>" . "SEGUNDO APELLIDO" . "</td>";
echo "<td>" . "NOMBRE" . "</td>";
echo "<td>" . "CURP" . "</td>";
echo "<tr>";
while ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";