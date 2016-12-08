<?php
include("../../controller/conexiondb.php");

$no_tarjeta = $_POST["no_tarjeta"];
$name = $_POST["name"];
$lastnameP = $_POST["lastnameP"];
$lastnameM = $_POST["lastnameM"];
$rfc = $_POST["rfc"];
$clave_area = $_POST["clave_area"];
$area_academica = $_POST["area_academica"];
$sex = $_POST["sex"];

$jsondata = array();
$respuesta = 1;

$sql = "INSERT INTO prueba VALUES ('". $no_tarjeta ."','". $name ."','". $lastnameP ."','". $lastnameM ."','". $rfc ."','". $clave_area ."','". $area_academica ."','". $sex ."')";
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