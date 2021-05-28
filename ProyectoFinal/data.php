<?php
$con = mysqli_connect('localhost', 'root', 'ProgramacionPOO', 'alumnopago');

$whPaterno = $_POST['whPaterno'];
$whMaterno = $_POST['whMaterno'];
$whNombre = $_POST['whNombre'];
$whFecNac = $_POST['whFecNac'];
$whGenero = $_POST['whGenero'];
$whNacion = $_POST['whNacion'];
$whEntNac = $_POST['whEntNac'];
$whCurp = $_POST['whCurp'];
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if($whNacion = 1){
    $whNacion = "MEXICO";
}
if($whGenero = "M") {
    $whGenero = "HOMBRE";
}
if($whGenero = "H"){
    $whGenero = "MUJER";
}
switch($whEntNac){
    case 0:
        $whEntNac = "DISTRITO FEDERAL";
        break;
    case 1:
        $whEntNac = "AGUASCALIENTES";
        break;
    case 2:
        $whEntNac = "BAJA CALIFORNIA NORTE";
        break;
    case 3:
        $whEntNac = "BAJA CALIFORNIA SUR";
        break;
    case 4:
        $whEntNac = "CAMPECHE";
        break;
    case 5:
        $whEntNac = "COAHUILA DE ZARAGOZA";
        break;
    case 6:
        $whEntNac = "COLIMA";
        break;
    case 7:
        $whEntNac = "CHIAPAS";
        break;
    case 8:
        $whEntNac = "CHIHUAHUA";
        break;
    case 9:
        $whEntNac = "DURANGO";
        break;
    case 10:
        $whEntNac = "GUANAJUATO";
        break;
    case 11:
        $whEntNac = "GUERRERO";
        break;
    case 12:
        $whEntNac = "HIDALGO";
        break;
    case 13:
        $whEntNac = "JALISCO";
        break;
    case 14:
        $whEntNac = "ESTADO DE MÉXICO";
        break;
    case 15:
        $whEntNac = "MICHOACÁN DE OCAMPO";
        break;
    case 16:
        $whEntNac = "MORELOS";
        break;
    case 17:
        $whEntNac = "NAYARIT";
        break;
    case 18:
        $whEntNac = "NUEVO LEÓN";
        break;
    case 19:
        $whEntNac = "OAXACA";
        break;
    case 20:
        $whEntNac = "PUEBLA DE LOS ÁNGELES";
        break;
    case 21:
        $whEntNac = "QUERÉTARO";
        break;
    case 22:
        $whEntNac = "QUINTANA ROO";
        break;
    case 23:
        $whEntNac = "SAN LUIS POTOSÍ";
        break;
    case 24:
        $whEntNac = "SINALOA";
        break;
    case 25:
        $whEntNac = "SONORA";
        break;
    case 26:
        $whEntNac = "TABASCO";
        break;
    case 27:
        $whEntNac = "TAMAULIPAS";
        break;
    case 28:
        $whEntNac = "TLAXCALA";
        break;
    case 29:
        $whEntNac = "VERACRUZ DE IGNACIO DE LA LLAVE";
        break;
    case 30:
        $whEntNac = "YUCATÁN";
        break;
    case 31:
        $whEntNac = "ZACATECAS";
        break;
    case 32:
        $whEntNac = "EXTRANJERO";
        break;
}


$sql = "INSERT INTO `comprobante`(`id`, `primApell`, `secApell`, `nombre`, `fecha`, `genero`, `lugar`, `lugarmun`, `curp`, `pago`) VALUES ('0',  '$whPaterno', '$whMaterno', '$whNombre', '$whFecNac', '$whGenero', '$whNacion', '$whEntNac', '$whCurp', '$fileName')";


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
