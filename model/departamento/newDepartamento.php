<?php
	include("../../controller/conexiondb.php");

	$claveArea = $_POST["claveArea"];
	$descripcionArea = $_POST["descripcionArea"];
	$areaDepende = $_POST["areaDepende"];
	$nivel = $_POST["nivel"];
	$tipoArea= $_POST["tipoArea"];

	$jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO departamento (claveArea, descripcionArea, areaDepende,nivel, tipoArea) VALUES ('". $claveArea ."','". $descripcionArea ."','". $areaDepende ."','". $nivel ."', '". $tipoArea ."')";
	mysqli_query($database,$sql) or $respuesta = 0;

	if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = "Registrado correctamente";
		$jsondata["details"] = "OK";
	}else{
		$jsondata["code"] = 500;
		$jsondata["msg"] = "Error en el registro";
		$jsondata["details"] = "OK";
	}

	header('Content-type: application/json; charset=utf-8');
    header("Cache-Control: no-store");
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
    $database->close();
    exit();
?>