<?php
	include("../../controller/conexiondb.php");

		$userid = $_POST["userid"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$status = $_POST["status"];
		$roleid = $_POST["roleid"];

		$jsondata = array();
		$respuesta = 1;

		$passwordcode = sha1(md5($password));

		if (strcmp ($password , "" ) == 0) {
			# Quiere decir que password esta vacio.
			$sql = "UPDATE usuario SET usuarioname='". $username ."',status='". $status ."',roleid=". $roleid ." WHERE usuarioid = ". $userid ."";
		}else{
			# Password no esta vacio.
			$sql = "UPDATE usuario SET usuarioname='". $username ."',password='". $passwordcode ."',status='". $status ."',roleid=". $roleid ." WHERE usuarioid = ". $userid ."";
		}

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
