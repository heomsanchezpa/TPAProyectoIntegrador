<?php 
	include("../../controller/conexiondb.php");

	$username = $_POST["username"];
	$password = $_POST["password"];


	$jsondata = array();

	if($result = $database->query("SELECT * FROM usuario WHERE usuarioname = '". $username ."' AND pass = '". $password ."'")){

		if ($result -> num_rows > 0) {
			
			$jsondata["code"] = 200;
			$jsondata["msg"] = "Si tiene acceso al sistema";
			$jsondata["details"] = "OK";
			

			session_start();
			$_SESSION["username"] = $username;

			while($fila = mysqli_fetch_assoc($result)){
				$_SESSION["roleid"] = $fila['id_rol'];
			}


		}else{
			$jsondata["code"] = 401;
			$jsondata["msg"] = "No tiene acceso al sistema";
			$jsondata["details"] = "OK";
		}

		$result -> close();

	}else{
		echo "Error en la consulta";
	}

	header('Content-type: application/json; charset=utf-8');
    header("Cache-Control: no-store");
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
    $database->close();
    exit();

	

?>