<?php
$conexion = mysqli_connect( 'localhost', 'root', '', 'prueba');

$nombre = '"'.$_POST['nombre'].'"';
$apellidopat = '"'.$_POST['apellidopat'].'"';
$apellidomat = '"'.$_POST['apellidomat'].'"';
$nocontrol = '"'.$_POST['nocontrol'].'"';
$carrera = '"'.$_POST['carrera'].'"';
$semestre = '"'.$_POST['semestre'].'"';
$status = '"'.$_POST['status'].'"';
$reticula = '"'.$_POST['reticula'].'"';
$nacimiento = '"'.$_POST['nacimiento'].'"';
$curp = '"'.$_POST['curp'].'"';
$sexo = '"'.$_POST['sexo'].'"';
$periodo = '"'.$_POST['periodo'].'"';
$promedio = '"'.$_POST['promedio'].'"';
$creditosapro = '"'.$_POST['creditosapro'].'"';
$creditoscursa = '"'.$_POST['creditoscursa'].'"';
$email = '"'.$_POST['email'].'"';
$nacionalidad = '"'.$_POST['nacionalidad'].'"';
$nip = '"'.$_POST['nip'].'"';
$especialidad = '"'.$_POST['especialidad'].'"';


if($conexion == FALSE){
  echo('Error en la conexion.');
  exit();
}

$resultado = mysqli_query($conexion, 'INSERT INTO alumno(apellido_pat, apellido_mat,
	carrera, creditos_aprobados, creditos_cursados, curp, email, especialidad,
	fecha_nac, nacionalidad, nip, nombres, no_control, periodo_ingreso,promedio, reticula,
	semestre, sexo, status) VALUES('.$apellidopat.','.$apellidomat.','.$carrera.','.
	$creditosapro.','.$creditoscursa.','.$curp.','.$email.','.$especialidad.','.$nacimiento.
	','.$nacionalidad.','.$nip.','.$nombre.','.$nocontrol.','.$periodo.','.$promedio.','.$reticula.','.
	$semestre.','.$sexo.','.$status.')');

if($resultado == FALSE){
  echo('Error en la consulta');
  mysqli_close($conexion);
  exit();
}

else {
  echo 'Se inserto la fruta';
}

mysqli_close($conexion);


 ?>
