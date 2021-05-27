<?php
$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

$whCurpReq = $_POST['whCurpReq'];

$sql = "SELECT * FROM comprobante WHERE curp='$whCurpReq'";


$result = mysqli_query($con, $sql);

echo "<br>";
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
    }
    echo "</tr>";
}
echo "</table>";