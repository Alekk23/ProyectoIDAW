<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

// get the post records
$whPaterno = $_POST['primApell'];
$whMaterno = $_POST['secApell'];
$whNombre = $_POST['nombre'];
$whFecNac = $_POST['fecha'];
$whGenero = $_POST['genero'];
$whNacion = $_POST['lugar'];
$whEntNac = $_POST['lugarmun'];
$whCurp = $_POST['curp'];
$file = $_POST['pago'];

// database insert SQL code
$sql = "INSERT INTO `comprobante`(`id`, `primApell`, `secApell`, `nombre`, `fecha`, `genero`, `lugar`, `lugarmun`, `curp`, `pago`) VALUES ('0',  '$whPaterno', '$whMaterno', '$whNombre', '$whFecNac', '$whGenero', '$whNacion', '$whEntNac', '$whCurp', '$file')";

// insert in database
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact Records Inserted";
}


