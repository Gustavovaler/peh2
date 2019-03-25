<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/header.php';



?>
<br>
<br>
<br>
<br>


<body>
	<?php 

	$_SESSION['level']='gustavo';
	if ($_SESSION['level'] == 'gustavo'){
		echo 'logueado';

	}else{
		header('Location: login.php');
	}
	




?>
	<table class="table table-bordered">
		<tr>
         <td width="10%">

			<form action="insert-item.php" method="POST">
				<input type="hidden" name="id" value="">
				<button class="btn btn-success btn-lg btn-block" type="submit"
			name="btnAccion" value="eliminar">Ingresar articulo nuevo</button>
             </form>
			</td>
		</tr>

	</table>




<table class="table table-bordered">
	<tbody>
		<tr>
			<th width="8%">Foto</th>
			<th width="14%">Articulo</th>
			<th width="35%">Descripcion</th>
			<th width="12%">Precio</th>
			<th width="3">Editar</th>
			<th width="5%">Borrar</th>
		</tr>
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM peh_tblproductos");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
			
			?>
		<?php
		$total=0;
		$contador=0;
		foreach ($listaProductos as $producto) {
			$contador++; ?>
			
		<tr>
			<td >
			<img src="<?php echo $producto['foto'];?>" width="50px"></td>
		 <td width="10%"><?php echo $producto['articulo']?></td>
		  
			<td width="35%"><?php echo $producto['descripcion']?></td>
			<td width="12%"><?php echo $producto['precio']?></td>
			
			
			<td width="5%">

			<form action="pre-edit.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $producto['ID']?>">
				<input type="hidden" name="foto" value="<?php echo $producto['foto']?>">
				<input type="hidden" name="categoria" value="<?php echo $producto['categoria']?>">
				<input type="hidden" name="articulo" value="<?php echo $producto['articulo']?>">
				<input type="hidden" name="descripcion" value="<?php echo $producto['descripcion']?>">
				<input type="hidden" name="precio" value="<?php echo $producto['precio']?>">
				<button class="btn btn-secondary" type="submit"
			name="btnAccion" value="eliminar">Editar</button>
             </form>
			</td>
			<td width="5%">

			<form action="delete-item.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $producto['ID']?>">
				<button class="btn btn-danger" type="submit"
			name="btnAccion" value="eliminar">Eliminar</button>
             </form>
			</td>
			
		</tr>

		<?php	} ?>
		<tr>
		
		
		
		</tr>
	</tbody>
	
</table>

</body>
</html>
