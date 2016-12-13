<?php
	include("../../controller/conexiondb.php");

	$id = $_POST["id"];
	$pregunta = $_POST["pregunta"];
	$tipopregunta = $_POST["tipopregunta"];
	
	$jsondata = array();
	$respuesta = 1;

	
	$sql = "UPDATE preguntas SET pregunta='".$pregunta."',tipo='".$tipopregunta."' WHERE idPregunta=".$id;
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