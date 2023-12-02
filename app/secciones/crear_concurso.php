<?php

include_once '../configuraciones/bd.php';
$conexionBD = BD:: crearInstancia();

$club =  isset($_POST['club'])?$_POST['club']:'';
$prueba=isset($_POST['prueba'])?$_POST['prueba']:'';
$ambito=isset($_POST['ambito'])?$_POST['ambito']:'';
$altura=isset($_POST['altura'])?$_POST['altura']:'';
$nobstaculos=isset($_POST['nobstaculos'])?$_POST['nobstaculos']:'';
$fecha = isset($_POST['fecha'])?$_POST['fecha']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';


if ($accion=='guardar'){
$sql2 ="INSERT INTO concursos (club, prueba, ambito,nobstaculos,fecha,altura) VALUES ('$club', '$prueba','$ambito','$nobstaculos','$fecha','$altura')";
$consulta = $conexionBD->prepare($sql2);
$consulta->execute();
  
}

?>