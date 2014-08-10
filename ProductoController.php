<?php
class ProductoController
{
	public $producto,$estado,$fecha_creacion,$fecha_actualizacion,$id,$band=0; //establecer propiedades
	public function listarProductos() //listar productos
	{
		include ('config/conn.php'); //include de archivo de conexion
		$sqllistar="
			SELECT 
				id,
				producto,
				CASE estado
					WHEN 0 THEN 'Deshabilitado'
					WHEN 1 THEN 'Habilitado'
				END 
				AS estado
			FROM productos ORDER BY id ASC;";//query de select

		$querylistar=$link->query($sqllistar) or die ("Error: ".mysql_error());// ejecutar query
		while($resultlistar = mysqli_fetch_array($querylistar, MYSQLI_NUM)) //mientras halla resultados imprimira un tr y crea funcion para eliminar
		{
			echo"
				<tr>
					<td>".$resultlistar[1]."</td>
					<td>".$resultlistar[2]."</td>
					<td>
						<center><a href='?p=3&x=".$resultlistar[0]."'><button type='button' class='btn btn-primary btn-circle fa fa-list'></button></a>
						<button type='button' id='btne_".$resultlistar[0]."' class='btn btn-danger btn-circle fa fa-times'></button></center>
					</td>
				</tr>
				<script type='text/javascript'>
					$('#btne_".$resultlistar[0]."').click(function () {
						$('#notificacion').load('EliminarProducto.php?id=' + ".$resultlistar[0].")
					});							
				</script>
			";
		}
	}

	public function ExtraeDatosProducto()//establecer valores a las propiedades
	{
		include ('config/conn.php'); //incluye archivo de conexion
		$sqlED="
			SELECT 
				id,
				producto,
				estado,
				fecha_creacion,
				fecha_actualizacion
			FROM productos
			where id=".$this->id.";";//query de select por id
			
		$queryED=$link->query($sqlED) or die ("Error: ".mysql_error());//ejecuta query
		
		$resultED = mysqli_fetch_array($queryED, MYSQLI_NUM); //extrae valores a array
		
		/*
		*Establecer valos a propiedades
		*/
		$this->producto=$resultED[1];
		$this->estado=$resultED[2];
		$this->fecha_creacion=$resultED[3];
		$this->fecha_actualizacion=$resultED[4];		
	}	
	
	public function Nproducto()
	{
		if($this->producto == "")//valora si la propiedad tiene valor o no 
			{
				echo '<button class="btn btn-danger" type="button"><i class="fa fa-times"></i>Nombre de Producto Vacio</button>';//notificacion
				$this->band=1;
			}
		else
		{
			$this->band=0;
		}
		//si ha tenido valor la propiedad sigue con el proceso
		if($this->band==0)
		{
			include ('config/conn.php');//incluye archivo de conexion
			$sqlcheck="select producto from productos where producto = '".$this->producto."';";//query de revision de existencia
			$querycheck=$link->query($sqlcheck) or die ("Error: ".mysql_error());//ejecucion de query
				if(!mysqli_fetch_array($querycheck)) // si no devuelve valores inserta el registro
					{
						$sqlinsert="insert into productos(producto,estado,fecha_creacion)";
						$sqlinsert.="values('".$this->producto."',".$this->estado.",now());";
						$query=$link->query($sqlinsert) or die ("Error: ".mysqli_error($link));
						echo"
							<script>
								alert ('Producto Agregado');
								window.location='?p=1';
							</script>"; // envia notificacion y redirecciona a la lista
					}
				else
					{
						echo"
							<script>
								alert ('Producto Existente');
							</script>"; //notifica de existencia
					}
		}
	}
	
	public function Aproducto() //actualizacion de producto
	{
		if($this->producto == "") //valora si la propiedad tiene valor o no
			{
				echo '<button class="btn btn-danger" type="button"><i class="fa fa-times"></i>Nombre de Producto Vacio</button>';
				$this->band=1;
			}
		else
		{
			$this->band=0;
		}
		//si ha tenido valor la propiedad sigue con el proceso
		if($this->band==0)
		{
			include ('config/conn.php'); //incluye archivo de conexion
			$sqlcheck="select producto from productos where producto = '".$this->producto."' and id != ".$this->id; //query de revision de existencia
			$querycheck=$link->query($sqlcheck) or die ("Error: ".mysql_error());
				if(!mysqli_fetch_array($querycheck))// si no devuelve valores inserta el registro
					{
						$sqlUpdate="update productos set producto = '".$this->producto."', estado = ".$this->estado.",";
						$sqlUpdate.="fecha_actualizacion=now() where id=".$this->id.";";
						$queryUpdate=$link->query($sqlUpdate) or die ("Error: ".mysqli_error($link));
						echo"
							<script>
								alert ('Producto Actualizado');
								window.location='?p=1';
							</script>";// envia notificacion y redirecciona a la lista
					}
				else
					{
						echo"
							<script>
								alert ('Producto Existente');
							</script>";//notifica de existencia
					}
		}
	}

	public function Eproducto()
	{
		include ('config/conn.php');//incluye archivo de conexion
		$sqldelete="update productos set estado = 0 where id=".$this->id;//query de actualizacion
		$querydelete=$link->query($sqldelete) or die ("Error: ".mysql_error());		
		echo"
			<script>
				alert ('Producto Deshabilitado');
				 window.location='?p=1';
			</script>"; //notifica de eliminacion y redirecciona a la lista
	}
}
	
?>