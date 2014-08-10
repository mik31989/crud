<div class="col-md-6 col-md-offset-3">
	<div class='panel-primary'>
		<div class='panel-heading'>
			<label>Actualizar Producto</label>
		</div><!--/ panel-heading-->
		<div class='panel-body'>
			<?php
				include ('ProductoController.php');//incluir el archivo de acciones
				$objprod=new ProductoController; //crear objeto 
				$objprod->id=$idproducto; //establecer valor a propiedad 
				$objprod->ExtraeDatosProducto(); //funcion recuperacion de datos 
			?>
			<div class="row panel panel-primary">
				<div class="panel-sub-heading">
					<div class='row'>
						<div class="col-lg-6">
							<i class="fa fa-calendar"></i>  Fecha de Creacion:
						</div>
						<div class="col-lg-6">
							<i class="fa fa-calendar"></i>  Ultima Actualizacion:
						</div>
					</div>
					<div class='row'>
						<div class="col-lg-6">
							<?php echo $objprod->fecha_creacion;?><!--Establecer valor obtenido existente en el objeto -->
						</div>
						<div class="col-lg-6">
							<?php echo $objprod->fecha_actualizacion;?><!--Establecer valor obtenido existente en el objeto -->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<form action='' method='POST' target='_self' id='FormAProducto' class="form-horizontal" role="form" >
						<div>
							<label>ID Producto: </label>
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-slack"></i></span>
							<input type='text' id='id' name='id' class="form-control" placeholder="ID" value='<?php echo $objprod->id;?>' readonly><!--Establecer valor obtenido existente en el objeto -->
						</div>
						<div>
							<label for="producto" class="control-label">Nombre: </label>
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-cube"></i></span>
							<input type='text' id='producto' name='producto' class="form-control" placeholder="Nombre" value='<?php echo $objprod->producto;?>'><!--Establecer valor obtenido existente en el objeto -->
						</div>
						<div>
							<label for="estado" class="control-label">Estado</label>
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-check"></i></span>
							<select id='estado' name='estado' class="form-control">
								<?php //<!--Establecer valor obtenido existente en el objeto -->
									if($objprod->estado == 1) //depende del valor lo asigna y crea el select con el valor obtenido
									{
										echo"<option value=1>Habilitar</option>
											<option value=0>Deshabilitar</option>";
									}
									if($objprod->estado == 0)
									{
										echo"<option value=0>Deshabilitar</option>
												<option value=1>Habilitar</option>";
									}
								?>
							</select>
						</div>
						<div class="row">
							<div class="col-lg-12" align='center'>
								<input type='submit' class="btn btn-success" value='Guardar'>
								<button type="reset" class="btn btn-warning">Reestablecer</button>
								<button type="button" id='btneliminar' class="btn btn-danger" >Eliminar</button>
							</div>
						</div><!--/ row-->
					</form><!--/ formAproducto-->
				</div>
			</div>
		</div><!--/ panel-body-->
		<div class='panel-footer'>
			<div id='notificacion'></div><!--/ div de notificacion de acciones-->
			<h6><p class="text-right">iFactory</p></h6>
		</div><!--/ panel-footer-->
	</div>
</div>