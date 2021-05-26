<?php

$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

$whPaterno = $_POST['primApell'];
$whMaterno = $_POST['secApell'];
$whNombre = $_POST['nombre'];
$whFecNac = $_POST['fecha'];
$whGenero = $_POST['genero'];
$whNacion = $_POST['lugar'];
$whEntNac = $_POST['lugarmun'];
$whCurp = $_POST['curp'];
$file = $_POST['pago'];


$sql = "INSERT INTO `comprobante`(`id`, `primApell`, `secApell`, `nombre`, `fecha`, `genero`, `lugar`, `lugarmun`, `curp`, `pago`) VALUES ('0',  '$whPaterno', '$whMaterno', '$whNombre', '$whFecNac', '$whGenero', '$whNacion', '$whEntNac', '$whCurp', '$file')";


$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact Records Inserted";
}


