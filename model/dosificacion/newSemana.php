<?php
	include("../../controller/conexiondb.php");

	$iddosificacion = $_POST["iddosificacion"];
	$concepto = $_POST["concepto"];
    $evaluacion = $_POST["evaluacion"];
    $nosemana = $_POST["nosemana"];

	$jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO semana (iddosificacion, concepto, evaluacion, nosemana) VALUES (". $iddosificacion .",'". $concepto ."','".$evaluacion."',". $nosemana .")";
	mysqli_query($database,$sql) or $respuesta = 0;

	if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = "Registrado correctamente";
		$jsondata["details"] = "OK";
	}else{
		$jsondata["code"] = 500;
		$jsondata["msg"] = "Error en el registro de semanas";
		$jsondata["details"] = "OK";
	}

	header('Content-type: application/json; charset=utf-8');
    header("Cache-Control: no-store");
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
    $database->close();
    exit();
?>