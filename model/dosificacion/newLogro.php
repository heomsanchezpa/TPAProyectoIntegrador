<?php
	include("../../controller/conexiondb.php");

	$iddosificacion = $_POST["iddosificacion"];
	$criterioLogro = $_POST["criterioLogro"];
    $noCompetencia = $_POST["noCompetencia"];
    $porcentaje = $_POST["porcentaje"];

	$jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO logro (iddosificacion, criterioLogro, noCompetencia, porcentaje) VALUES (". $iddosificacion .",'". $criterioLogro ."',".$noCompetencia.",". $porcentaje .")";
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