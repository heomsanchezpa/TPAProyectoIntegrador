<?php
	include("../../controller/conexiondb.php");

	$materiaidentificador = $_POST["materiaidentificador"];
	$materiaid = $_POST["materiaid"];
	$cbNivelEscolar = $_POST["cbNivelEscolar"];
	$cbMateriaTipo = $_POST["cbMateriaTipo"];
	$clavearea = $_POST["clavearea"];
	$nombremateria = $_POST["nombremateria"];
	$nombreabreviado = $_POST["nombreabreviado"];
	$numerocreditos = $_POST["numerocreditos"];
	$cbNombreCarrera = $_POST["cbNombreCarrera"];

		$jsondata = array();
		$respuesta = 1;

		$sql = "UPDATE materias SET nivel_escolar = '". $cbNivelEscolar ."', materia_tipo = ". $cbMateriaTipo .", clave_area=". $clavearea .", nombre_completo = '". $nombremateria ."',nombre_abrev='"+ $nombreabreviado +"',creditos=". $numerocreditos .",carreraid=". $cbNombreCarrera .",clave_materia='". $materiaid ."' WHERE materiaid = ". $materiaidentificador .""

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