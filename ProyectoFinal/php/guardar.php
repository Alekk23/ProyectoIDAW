<?php
 require 'conexion.php';

$whPaterno = $_POST['primApell'];
$whMaterno = $_POST['secApell'];
$whNombre = $_POST['nombre'];
$whFecNac = $_POST['fecha'];
$whGenero = $_POST['genero'];
$whNacion = $_POST['lugar'];
$whEntNac = $_POST['lugarmun'];
$whCurp = $_POST['curp'];
$file = $_POST['pago'];

$insertar = "INSERT INTO comprobante VALUES ('$whPaterno','$whMaterno','$whNombre', '$whFecNac', '$whGenero', '$whNacion', '$whEntNac', '$whCurp', '$file') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../ProyectoFinal.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../ProyectoFinal.html';
    </script>";
}






?>