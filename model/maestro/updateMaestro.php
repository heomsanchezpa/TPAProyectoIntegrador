<?php
include("../../controller/conexiondb.php");

$no_tarjeta = $_POST["no_tarjeta2"];
$name = $_POST["name2"];
$lastnameP = $_POST["lastnameP2"];
$lastnameM = $_POST["lastnameM2"];
$rfc = $_POST["rfc2"];
$clave_area = $_POST["clave_area2"];
$area_academica = $_POST["area_academica2"];
$sex = $_POST["sex2"];

$jsondata = array();
$respuesta = 1;

$sql = "UPDATE maestro ". "SET name = '$name'".
			   ",lastnameP = '$lastnameP'".
			   ",lastnameM = '$lastnameM'".
			   ",rfc = '$rfc'".
			   ",clave_area = '$clave_area'".
			   ",area_academica = '$area_academica'".
			   ",sex = '$sex'".
               "WHERE no_tarjeta = $no_tarjeta" ;

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