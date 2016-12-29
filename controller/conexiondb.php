<?php
	$dbserver = "localhost";
	$dbuser = "root";
	$password = "";
	$dbname = "prueba";

	$database = new mysqli($dbserver, $dbuser, $password, $dbname);

	if($database -> connect_errno){
		die("No se pudo conectar a la base de datos");
	}
 ?>
