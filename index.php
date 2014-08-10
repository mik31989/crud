<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<meta name="author" content="Miguel Romero">
		<link rel="icon" href="images/favicon.png">

		<title>Practica01 iFactory</title>
		<!--Libreria jquery-->
		<script src="js/jquery.min.js"></script>
		<!--Hojas de Estilos CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet"><!--bootstrap-->
		<link href="css/starter-template.css" rel="stylesheet"> <!--diseño de la pagina-->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet"><!--iconos del FORM-->
		<link href="css/dataTables.bootstrap.css" rel="stylesheet"> <!--plugin datatables-->
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<!--Menu con web responsive-->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="/crud">CRUD Productos-iFactory</a>
			</div>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="?p=1">Lista de Productos</a></li>
				<li><a href="?p=2">Nuevo Producto</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div><!--/container -->
		</div> <!--/navbar -->
		<div class="container">
			<br>
			<div class="row">
				<?php
					if (isset($_GET["p"]))//recepcion de variale "p" para cargar la seccion correspondiente
						{
							switch($_GET["p"])
								{
									case 1:{	
											include_once("ListaProductos.php"); //incluye el datatable de productos
											break;
											}
									case 2:{
											include_once("FormNProducto.php"); //incluye el Formulario para Nuevo Producto
											break;
											}
									case 3:{
											$idproducto=$_GET['x'];
											include_once("FormAProducto.php"); //incluye el Formulario para Actualizar Producto
											break;
											}
								}
						}
						else
						{
							include_once("welcome.php"); //en caso de no recibir "p" incluye la pagina de inicio
						}
				?>
			</div><!--/Row -->
		</div><!-- /.container -->
	<!--Librerias Java Script -->
	<script src="js/bootstrap.min.js"></script>	<!--bootstrap-->
	<script src="js/jquery.dataTables.js"></script><!--datatables-->
    <script src="js/dataTables.bootstrap.js"></script><!--datatables-->

<!--======= Funciones de carga de archivos ===========-->
	<script type='text/javascript'>
		$(document).ready(function() {
			$('#TablaProducto').dataTable();//funcion para crear el datatable de productos
		});

		$(function (e) {
			$('#FormNProducto').submit(function (e) { //funcion para cargar el archivo que guarda el producto al dar click en el submit
				e.preventDefault()
				$('#notificacion').load('GuardaNProducto.php?' + $('#FormNProducto').serialize())
			});
		});
		
		$(function (a) {
			$('#FormAProducto').submit(function (a) { //funcion para cargar el archivo que actualiza el producto al dar click en el submit
				a.preventDefault()
				$('#notificacion').load('GuardaAProducto.php?' + $('#FormAProducto').serialize())
			});
		});		
		$('#btneliminar').click(function () { //funcion para cargar el archivo que elimina el producto al dar click en el submit
			$('#notificacion').load('EliminarProducto.php?' + $('#FormAProducto').serialize())
		});				
	</script>
	</body>
</html>