<?php
/**
 * Created by PhpStorm.
 * User: Armando_Navarro
 * Date: 06/12/2016
 * Time: 06:30 PM
 */
include("../../controller/conexiondb.php");

$idcarrera = $_POST["idcarrera"];

$jsondata = array();
$respuesta = 1;

$sql = "DELETE FROM carrera WHERE idcarrera = ". $idcarrera;

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