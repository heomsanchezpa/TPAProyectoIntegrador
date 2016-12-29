<?php
	session_start();
	if(isset($_SESSION["username"])){

	}else{
		header("location: index.php");
	}

	$jsondata = array();

	$jsondata["code"] = 200;
	$jsondata["msg"] = $_SESSION["username"];
	$jsondata["details"] = "OK";

	header('Content-type: application/json; charset=utf-8');
    header("Cache-Control: no-store");
    echo json_encode($jsondata, JSON_FORCE_OBJECT);

    exit();
?>
