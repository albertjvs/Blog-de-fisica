<!--enlace a los copentarios de php-->
<?php
 session_start();
$con=new conectarse("localhost", "root", "Pumas_.123", "comentarios");
$conex=$con->conectar();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
	<title>  &nbsp;Actualizaci&oacute;n </title>
</head>
<body onload="maxi()"> 
<h1>Proceso de actualizaci&oacute;n de la base de datos</h1>
<?
