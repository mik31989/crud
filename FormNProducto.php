<div class="col-md-6 col-md-offset-3">
	<div class='panel-primary'>
		<div class='panel-heading'>
			<label>Nuevo Producto</label>
		</div><!--/ panel-heading-->
		<div class='panel-body'>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<form action='' method='POST' target='_self' id='FormNProducto' class="form-horizontal" role="form" >
						<div>
							<label for="producto" class="control-label">Nombre: </label>
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-cube"></i></span>
							<input type='text' id='producto' name='producto' class="form-control" placeholder="Nombre">
						</div>
						<div>
							<label for="estado" class="control-label">Estado: </label>
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-check"></i></span>
							<select id='estado' name='estado' class="form-control">
								<option value='1'>Habilitar</option>
								<option value='0'>Deshabilitar</option>
							</select>
						</div>
						<div class="row">
							<div class="col-lg-12" align='center'>
								<input type='submit' class="btn btn-success" value='Guardar'>
								<input type="reset" class="btn btn-warning" value='Limpiar'>
							</div>
						</div><!--/ row-->
					</form><!--/ formNproducto-->
				</div>
			</div><!--/ row -->
		</div><!--/ panel-body-->
		<div class='panel-footer'>
			<div id='notificacion'></div><!--/ Div para notificacion de acciones-->
			<h6><p class="text-right">iFactory</p></h6>
		</div>
	</div>
</div>