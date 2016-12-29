<?php
	include("../../controller/conexiondb.php");

    $iddosificacion = $_POST["iddosificacion"];
    $nombre = $_POST["nombre"];
    $numero = $_POST["numero"];
    $horasTeoricas = $_POST["horasTeoricas"];
    $horasPracticas = $_POST["horasPracticas"];
    $descripcion = $_POST["descripcion"];
    $temas = $_POST["temas"];
    $actividadesAprendizaje = $_POST["actividadesAprendizaje"];
    $actividadesEnsenanza = $_POST["actividadesEnsenanza"];
    $desarrolloCompEsp = $_POST["desarrolloCompEsp"];
    $observaciones = $_POST["observaciones"];
    $acciones = $_POST["acciones"];




    $jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO competenciaEspecifica (nombre,numero,horasTeoricas,horasPracticas,descripcion,temas,actividadesAprendizaje,actividadesEnsenanza,desarrolloCompEsp,iddosificacion, observaciones, acciones) VALUES ('".$nombre."',".$numero.",".$horasTeoricas.",".$horasPracticas.",'".$descripcion."','".$temas."','".$actividadesAprendizaje."','".$actividadesEnsenanza."','".$desarrolloCompEsp."',".$iddosificacion.",'". $observaciones."','".$acciones."')";
	mysqli_query($database,$sql) or $respuesta = 0;

	if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = $database->insert_id;
		$jsondata["details"] = "OK";
	}else{
		$jsondata["code"] = 500;
		$jsondata["msg"] = $database->error;
		$jsondata["details"] = "OK";
	}

	header('Content-type: application/json; charset=utf-8');
    header("Cache-Control: no-store");
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
    $database->close();
    exit();
?>