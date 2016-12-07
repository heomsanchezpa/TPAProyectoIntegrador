<?php
	
	include("../../controller/conexiondb.php");
	
	$idHorario = $_POST["idHorario2"];
	$materia2 = $_POST["materia2"];
	$maestro2 = $_POST["maestro2"];
	$hora_ini2 = $_POST["hora_ini2"];
	$hora_fin2 = $_POST["hora_fin2"];
	$grupo2 = $_POST["grupo2"];
	$aula2 = $_POST["aula2"];
	$dias2 = $_POST["dias2"];
	
	$jsondata = array();
	$respuesta = 1;
	
	$sql = "UPDATE horarios ". "SET materia = '".$materia2."'".
			   ",maestro = '".$maestro2."'".
			   ",hora_ini = '".$hora_ini2."'".
			   ",hora_fin = '".$hora_fin2."'".
			   ",grupo = '".$grupo2."'".
			   ",aula = '".$aula2."'".
			   ",dias = '".$dias2."'".
               " WHERE horarios.idHorario = ".$idHorario;
			   
	mysqli_query($database,$sql) or $respuesta = 0;
	if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = "Registrado correctamente";
		$jsondata["details"] = "OK";
	}else{
		$jsondata["code"] = 500;
		$jsondata["msg"] = "Error al editar el Registro";
		$jsondata["details"] = "error";
	}
	
	header('Content-type: application/json; charset=utf-8');
	header("Cache-Control: no-store");
	
	echo json_encode($jsondata, JSON_FORCE_OBJECT);
	
	$database->close();
	exit();
?>