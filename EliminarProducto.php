<?php
	include_once('ProductoController.php'); //incluir archivo de acciones
	$objProducto = new ProductoController(); //crear objeto
	$objProducto->id=$_REQUEST['id'];//establecer valor a la propiedad
	$objProducto->Eproducto();  //llamado a funcion eliminar
?>