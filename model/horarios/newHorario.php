<?php
	include("../../controller/conexiondb.php");

	$materia = $_POST["materia"];
	$maestro = $_POST["maestro"];
	$dias = $_POST["dias"];
	$hora_ini = $_POST["hora_ini"];
	$hora_fin = $_POST["hora_fin"];
	$aula = $_POST["aula"];
	$grupo = $_POST["grupo"];

	$jsondata = array();
	$respuesta = 1;
	
	$sql="INSERT INTO horarios (materia, maestro, hora_ini, hora_fin, dias, aula, grupo) 
	VALUES ('".$materia."','".$maestro."','".$hora_ini."','".$hora_fin."','".$dias."','".$aula."','".$grupo."')";
	
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