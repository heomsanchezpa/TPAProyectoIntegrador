<?php
	include("../../controller/conexiondb.php");

    $idcomp = $_POST["idcomp"];
    $evaluacionAprendizaje = $_POST["evaluacionAprendizaje"];
    $porcentaje = $_POST["porcentaje"];
    $indicadorAlcance = $_POST["indicadorAlcance"];
    $evalformcomp = $_POST["evalformcomp"];

    $jsondata = array();
	$respuesta = 1;

	$sql =
        "INSERT INTO matrizEvaluacion 
(idcomp,evaluacionAprendizaje,porcentaje, indicadorAlcance,evalformcomp) 
VALUES 
(".$idcomp.",'".$evaluacionAprendizaje."',".$porcentaje.",".$indicadorAlcance.",'".$evalformcomp."')";
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