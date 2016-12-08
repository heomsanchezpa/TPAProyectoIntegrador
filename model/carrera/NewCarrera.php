<?php
/**
 * Created by PhpStorm.
 * User: Armando_Navarro
 * Date: 06/12/2016
 * Time: 09:56 AM
 */

include("../../controller/conexiondb.php");

$nombreCarrera = $_POST["nombreCarrera"];
$planEstudios = $_POST["planEstudios"];

$jsondata = array();
$respuesta = 1;

$sql = "INSERT INTO carrera (nombreCarrera,planEstudios) VALUES ('". $nombreCarrera."','".$planEstudios."')";
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