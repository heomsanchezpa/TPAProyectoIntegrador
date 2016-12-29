<?php
	include("../../controller/conexiondb.php");

	$aula = $_POST["aula"];
	$edificio = $_POST["ubicacion"];
	$capacidad = $_POST["capacidad"];
	$observaciones = $_POST["observaciones"];
	$status = $_POST["status"];


	$jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO aula (nombreAula, idEdificio, capacidad, observaciones, estatus) VALUES ('". $aula ."',". $edificio .",". $capacidad .",'". $observaciones."',". $status .")";
	mysqli_query($database,$sql) or $respuesta = 0;

	if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = "Registrado correctamente";
		$jsondata["details"] = "OK";
	}else{
		$jsondata["code"] = 500;
		$jsondata["msg"] = $database->error;
		$jsondata["details"] = "OK";
	}

	header('Content-type: application/json; charset=utf-8');
    header("Cache-Control: no-store");
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
    $database->close();
    exit();
?>