<?php
	include("../../controller/conexiondb.php");

	$username = $_POST["username"];
	$password = $_POST["password"];
	$roleid = $_POST["roleid"];
	return $password;
	$passwordcode = sha1(md5($password));

	$jsondata = array();
	$respuesta = 1;

	$sql = "INSERT INTO usuario (usuarioname, password, status, roleid) VALUES ('". $username ."','". $passwordcode ."','a','". $roleid ."')";
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
