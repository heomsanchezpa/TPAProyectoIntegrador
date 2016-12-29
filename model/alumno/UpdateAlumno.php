<?php

include("../../controller/conexiondb.php");

$no_control= $_POST["no_control"];
$carrera= $_POST["carrera"];
$semestre= $_POST["semestre"];
$estatus= $_POST["estatus"];
$reticula= $_POST["reticula"];
$especialidad= $_POST["especialidad"];
$nombres= $_POST["nombres"];
$apellido_pat= $_POST["apellido_pat"];
$apellido_mat= $_POST["apellido_mat"];
$fecha_nac= $_POST["fecha_nac"];
$curp= $_POST["curp"];
$sexo= $_POST["sexo"];
$periodo_ingreso= $_POST["periodo_ingreso"];
$promedio_aritmetico= $_POST["promedio_aritmetico"];
$creditos_aprobados= $_POST["creditos_aprobados"];
$creditos_cursados= $_POST["creditos_cursados"];
$email= $_POST["email"];
$nacionalidad= $_POST["nacionalidad"];
$nip= $_POST["nip"];

$jsondata = array();
$respuesta = 1;

$sql = "UPDATE alumno SET carrera='". $carrera
."',semestre='".$semestre
."',estatus='".$estatus
."',reticula='".$reticula
."',especialidad='".$especialidad
."',nombres='".$nombres
."',apellido_pat='".$apellido_pat
."',apellido_mat='".$apellido_mat
."',fecha_nac='".$fecha_nac
."',curp='".$curp
."',sexo='".$sexo
."',periodo_ingreso='".$periodo_ingreso
."',promedio_aritmetico='".$promedio_aritmetico
."',creditos_aprobados='".$creditos_aprobados
."',creditos_cursados='".$creditos_cursados
."',email='".$email
."',nacionalidad='".$nacionalidad
 ."',nip='".$nip."' WHERE no_control = ". $no_control;

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