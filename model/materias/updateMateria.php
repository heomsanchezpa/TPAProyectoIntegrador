<?php
include("../../controller/conexiondb.php");

$materiaid = $_POST["materiaid"]; #Entero

$clavemateria = $_POST["clavemateria"]; #Varchar10
$cbNivelEscolar = $_POST["cbNivelEscolar"]; #char1
$cbMateriaTipo = $_POST["cbMateriaTipo"]; #Int
$clavearea = $_POST["clavearea"]; #Int
$nombremateria = $_POST["nombremateria"]; #Varchar
$nombreabreviado = $_POST["nombreabreviado"]; #Varchar
$numerocreditos = $_POST["numerocreditos"]; #Int
$cbNombreCarrera = $_POST["cbNombreCarrera"]; #Int

  $jsondata = array();
  $respuesta = 1;

  $sql = "UPDATE materias SET clave_materia='". $clavemateria ."',nivel_escolar='".$cbNivelEscolar."',materia_tipo=". $cbMateriaTipo .",clave_area=". $clavearea .",nombre_completo='". $nombremateria ."',nombre_abrev='".$nombreabreviado."',creditos=". $numerocreditos .",idcarrera=". $cbNombreCarrera ." WHERE materiaid = ". $materiaid ."";


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
