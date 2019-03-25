<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/header.php';
?>
<br>
<br>

<h3>Lista Carrito	</h3><br>
<?php 

if (!empty($_SESSION['CARRITO'])) {?>
	
<table class="table table-bordered">
	<tbody>
		<tr>
			<th width="20%">Articulo</th>
			<th width="40%">Descripcion</th>
			<th width="12%">Precio</th>
			<th width="3">Cant</th>
			<th width="15%">Total</th>
			<th width="5%">--</th>
		</tr>
		<?php
		$total=0;
		$contador=0;
		foreach ($_SESSION['CARRITO'] as $indice => $producto) {
			$contador++; ?>
			
		<tr>
		 <td width="20%"><?php echo $producto['articulo']?></td>
			<td width="40%"><?php echo $producto['descripcion']?></td>
			<td width="12%"><?php echo $producto['precio']?></td>
			<td width="3" align="right"><?php echo $producto['cantidad']?></td>
			<td width="15%"><?php echo number_format($producto['cantidad']*$producto['precio'],2) ?></td>
			<td width="5%">

			<form action="" method="POST">
				<input type="hidden" name="id" value="<?php echo $producto['ID']?>">

			<button class="btn btn-danger" type="submit"
			name="btnAccion" value="eliminar">Eliminar</button>
             </form>
			</td>
			
		</tr>

		<?php $total=$total+($producto['cantidad']*$producto['precio']);	} ?>
		<tr>
		<td colspan="3" align="right"><h3>Total</h3></td>
		<td align="right"><h4><?php echo $contador; ?></h4></td>
		<td><h4>$ <?php echo number_format($total,2);?></h4></td>
		</tr>
	</tbody>
	
</table>
<form action="bot.php" method="POST">
	<input type="submit" name="enviar" value="Elegir medio de pago">
	
</form>

<?php } 
else{?>
<div class="alert alert-success">
	No hay productos en el carrito.....
</div>
<?php
} 

?>



<?php
include 'templates/footer.php';
?>

