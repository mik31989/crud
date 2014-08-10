<div class="col-md-10 col-md-offset-1">
	<div class='panel-primary'>
		<div class='panel-heading'>
			<label>Lista de Productos</label>
		</div><!--/panel-heading-->
		<div class='panel-body'>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive" id="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="TablaProducto">
							<thead>
								<tr>
									<th width='50%'>Producto</th>
									<th width='30%'>Estado</th>
									<th width='20%'>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									include_once('ProductoController.php');//incluir archivo de acciones
									$objproducto=new ProductoController(); //crear objeto
									$objproducto->listarproductos(); //llamado a funcion para llenar datatable
								?> 
							</tbody>
						</table>
					</div> <!--/table responsive-->
				</div>
			</div><!--/row-->
		</div> <!--/panel-body-->
		<div class='panel-footer'>
			<div id='notificacion'></div><!--/div para notificacion de acciones -->
			<h6><p class="text-right">iFactory</p></h6>
		</div> <!--/panel-footer-->
	</div>
</div>