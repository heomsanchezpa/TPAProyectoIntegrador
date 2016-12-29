<?php
	include("../../controller/conexiondb.php");

    $idcomp = $_POST["idcomp"];
    $desempeno = $_POST["desempeno"];
    $nivelDesempeno = $_POST["nivelDesempeno"];
    $indicadorAlcance = $_POST["indicadorAlcance"];
    $valoracion = $_POST["valoracion"];

    $jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO desempeno (idcomp,desempeno,nivelDesempeno, indicadorAlcance,valoracion) VALUES (".$idcomp.",'".$desempeno."','".$nivelDesempeno."','".$indicadorAlcance."','".$valoracion."')";
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