<?php
	include("../../controller/conexiondb.php");

    $periodo = $_POST["periodo"];
    $planestudios = $_POST["planestudios"];
    $idmaestro = $_POST["idmaestro"];
    $idcarrera = $_POST["idcarrera"];
    $horasPracticas = $_POST["horasPracticas"];
    $horasTeoricas = $_POST["horasTeoricas"];
    $caracterizacionAsignatura = $_POST["caracterizacionAsignatura"];
    $intencionDidactica = $_POST["intencionDidactica"];
    $competenciaAsignatura= $_POST["competenciaAsignatura"];
    $bibliografia = $_POST["bibliografia"];

    $jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO dosificacion (periodo,planestudios,idmaestro,idcarrera,horasPracticas,horasTeoricas,caracterizacionAsignatura,intencionDidactica,competenciaAsignatura,bibliografia) VALUES ('".$periodo."','".$planestudios."',".$idmaestro.",".$idcarrera.",".$horasPracticas.",".$horasTeoricas.",'".$caracterizacionAsignatura."','".$intencionDidactica."','".$competenciaAsignatura."','". $bibliografia."')";
	mysqli_query($database,$sql) or $respuesta = 0;

	if($respuesta == 1){
		$jsondata["code"] = 200;
		$jsondata["msg"] = $database->insert_id;
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