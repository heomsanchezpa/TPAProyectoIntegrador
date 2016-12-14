<?php
include("../../controller/conexiondb.php");

$no_tarjeta = $_POST["no_tarjeta"];

$jsondata = array();
$respuesta = 1;

$sql = "delete FROM maestro where no_tarjeta = '". $no_tarjeta ."'";
mysqli_query($database,$sql) or $respuesta = 0;

if($respuesta == 1){
	$jsondata["code"] = 200;
	$jsondata["msg"] = "Registrado correctamente";
	$jsondata["details"] = "OK";
}else{
	$jsondata["code"] = 500;
	$jsondata["msg"] = "Error en el registro";
	$jsondata["details"] = "error";
}

header('Content-type: application/json; charset=utf-8');
header("Cache-Control: no-store");
echo json_encode($jsondata, JSON_FORCE_OBJECT);
$database->close();
exit();
?>