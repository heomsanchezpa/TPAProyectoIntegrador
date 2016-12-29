<?php

include("../../controller/conexiondb.php");

$no_control= $_POST["no_control"];
$carrera= $_POST["carrera"];
$semestre= $_POST["semestre"];
$status= $_POST["status"];
$reticula= $_POST["reticula"];
$especialidad= $_POST["especialidad"];
$nombres= $_POST["nombres"];
$apellido_pat= $_POST["apellido_pat"];
$apellido_mat= $_POST["apellido_mat"];
$fecha_nac= $_POST["fecha_nac"];
$curp= $_POST["curp"];
$sexo= $_POST["sexo"];
$periodo_ingreso= $_POST["periodo_ingreso"];
$promedio= $_POST["promedio"];
$creditos_aprobados= $_POST["creditos_aprobados"];
$creditos_cursados= $_POST["creditos_cursados"];
$email= $_POST["email"];
$nacionalidad= $_POST["nacionalidad"];
$nip= $_POST["nip"];

$jsondata = array();
$respuesta = 1;

$sql = "INSERT INTO alumno (no_control,carrera,semestre,status,reticula,especialidad,nombres,apellido_pat,apellido_mat,
	fecha_nac,curp,sexo,periodo_ingreso,promedio,creditos_aprobados,creditos_cursados,email,nacionalidad,nip
	) VALUES ('". $no_control."','".$carrera."','".$semestre."','".$status."','".$reticula."','".$especialidad."','".
	$nombres."','".$apellido_pat."','".$apellido_mat."','".$fecha_nac."','".$curp."','".$sexo."','".$periodo_ingreso."','".
	$promedio."','".$creditos_aprobados."','".$creditos_cursados."','".$email."','".$nacionalidad."','".
	$nip."')";

mysqli_query($database,$sql) or $respuesta = 0;

if($respuesta == 1){
    $jsondata["code"] = 200;
    $jsondata["msg"] = "Registrado correctamente";
    $jsondata["details"] = "OK";
}else{
    $jsondata["code"] = 500;
    $jsondata["msg"] = "Error al registrar";
    $jsondata["details"] = "OK";
}

header('Content-type: application/json; charset=utf-8');
header("Cache-Control: no-store");
echo json_encode($jsondata, JSON_FORCE_OBJECT);
$database->close();
exit();
?>