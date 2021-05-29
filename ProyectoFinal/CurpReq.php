<?php
$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

$whCurpReq = $_POST['whCurpReq'];

$sql = "SELECT primApell, secApell, nombre, genero, fecha, lugar, lugarmun, pago  FROM comprobante WHERE curp='$whCurpReq'";

$result = mysqli_query($con, $sql);

echo "<link rel='stylesheet' type='text/css' href='estilotable.css' />";
echo "<br>";
echo "<table border='1' style='width:100%'>";
echo "<tr>";
echo "<td>" . "PRIMER APELLIDO" . "</td>";
echo "<td>" . "SEGUNDO APELLIDO" . "</td>";
echo "<td>" . "NOMBRE" . "</td>";
echo "<td>" . "GENERO" . "</td>";
echo "<td>" . "FECHA DE NACIMIENTO" . "</td>";
echo "<td>" . "NACIONALIDAD" . "</td>";
echo "<td>" . "ENTIDAD DE NACIMIENTO" . "</td>";
echo "<td>" . "COMPROBANTE DE PAGO" . "</td>";
echo "<tr>";
while ($row = mysqli_fetch_assoc($result)) {
    $Pago = $row['pago'];
    echo "<tr>";
    echo "<td>" . $row["primApell"] . "</td>";
    echo "<td>" . $row["secApell"] . "</td>";
    echo "<td>" . $row["nombre"] . "</td>";
    echo "<td>" . $row["genero"] . "</td>";
    echo "<td>" . $row["fecha"] . "</td>";
    echo "<td>" . $row["lugar"] . "</td>";
    echo "<td>" . $row["lugarmun"] . "</td>";
    echo "<td>" . "<a href='uploads/$Pago'>Mostrar Comprobante de pago</a>" . "</td>";
    echo "</tr>";
}
echo "</table>";