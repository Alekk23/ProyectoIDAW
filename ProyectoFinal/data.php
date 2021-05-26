<?php
include('ProyectoFinal.html');

$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

$whPaterno = $_POST['whPaterno'];
$whMaterno = $_POST['whMaterno'];
$whNombre = $_POST['whNombre'];
$whFecNac = $_POST['whFecNac'];
$whGenero = $_POST['whGenero'];
$whNacion = $_POST['whNacion'];
$whEntNac = $_POST['whEntNac'];
$whCurp = $_POST['whCurp'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$sql = "INSERT INTO `comprobante`(`id`, `primApell`, `secApell`, `nombre`, `fecha`, `genero`, `lugar`, `lugarmun`, `curp`, `pago`) VALUES ('0',  '$whPaterno', '$whMaterno', '$whNombre', '$whFecNac', '$whGenero', '$whNacion', '$whEntNac', '$whCurp', '$target_file')";


$rs = mysqli_query($con, $sql);

if($rs){

    echo "<script> alert('Registro Correcto');
    location.href = 'ProyectoFinal.html';
   </script>";

}else{
    echo "<script> alert('Registro incorrecto');
    location.href = 'ProyectoFinal.html';
    </script>";
}
