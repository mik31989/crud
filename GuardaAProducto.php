<?php
	include_once('ProductoController.php'); //incluir archivo de acciones
	$objProducto = new ProductoController(); //crear objeto
	//establecer valor a las propiedades
	$objProducto->producto=$_REQUEST['producto'];
	$objProducto->id=$_REQUEST['id'];
	$objProducto->estado=$_REQUEST['estado'];
	
	$objProducto->Aproducto(); //llamado a funcion actualizar
?>