<?php
$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

$sql = "SELECT primApell, secApell, nombre, curp FROM comprobante";


$result = mysqli_query($con, $sql);

echo "<br>";
echo "<table border='1' style='width:100%'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";