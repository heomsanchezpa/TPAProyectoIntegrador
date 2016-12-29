<?php
	include("../../controller/conexiondb.php");

		$claveArea = $_POST["claveArea"];
		$descripcionArea = $_POST["descripcionArea"];
		$areaDepende = $_POST["areaDepende"];
		$nivel = $_POST["nivel"];
		$tipoArea = $_POST["tipoArea"];

		$jsondata = array();
		$respuesta = 1;

		$sql = "UPDATE departamento SET claveArea='". $claveArea ."',descripcionArea='". $descripcionArea ."',areaDepende='". $areaDepende ."',nivel=". $nivel.", tipoArea=". $tipoArea." WHERE claveArea = ". $claveArea ."";

		mysqli_query($database,$sql) or $respuesta = 0;

		if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = "Registro actualizado correctamente";
		$jsondata["details"] = "OK";
	}else{
		$jsondata["code"] = 500;
		$jsondata["msg"] = "Error en la actualización";
		$jsondata["details"] = "OK";
	}

	header('Content-type: application/json; charset=utf-8');
    header("Cache-Control: no-store");
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
    $database->close();
    exit();
?>