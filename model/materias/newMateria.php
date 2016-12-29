<?php
	include("../../controller/conexiondb.php");

	$clavemateria = $_POST["clavemateria"];
	$cbNivelEscolar = $_POST["cbNivelEscolar"];
	$cbMateriaTipo = $_POST["cbMateriaTipo"];
	$clavearea = $_POST["clavearea"];
	$nombremateria = $_POST["nombremateria"];
	$nombreabreviado = $_POST["nombreabreviado"];
	$numerocreditos = $_POST["numerocreditos"];
	$cbNombreCarrera = $_POST["cbNombreCarrera"];


	$jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO materias (clave_materia, nivel_escolar, materia_tipo, clave_area, nombre_completo, nombre_abrev, creditos, idcarrera) VALUES ('". $clavemateria ."' , '". $cbNivelEscolar ."' , ". $cbMateriaTipo ." , ". $clavearea ." , '". $nombremateria ."', '". $nombreabreviado ."', ". $numerocreditos .", ". $cbNombreCarrera .");";
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
