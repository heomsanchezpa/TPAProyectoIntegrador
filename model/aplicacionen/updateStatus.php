<?php 
session_start();	
	include("../../controller/conexiondb.php");


	$var_sesion=$_SESSION["username"];
	
	$jsondata = array();	
	$respuesta = 1;
	
	$sql="UPDATE alumno SET status = 'S' WHERE alumno.no_control=".$var_sesion;
	
	mysqli_query($database,$sql) or $respuesta = 0;
	if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = "Actualizado Status";
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