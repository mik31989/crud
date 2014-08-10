<?php
	/*
	*Datos de conexion a la BD
	*/
	$server='localhost';
	$db='ifactory';
	$password='';
	$user='root';	
	$link = mysqli_connect($server,$user,$password,$db) or die("Error " . mysqli_error($link)); //en caso de fallar la conexion envia el error
?>