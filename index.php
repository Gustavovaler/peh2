<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/header.php';
?>
        <link rel="stylesheet" type="text/css" href="css/index.css">

<?php if(isset($_SESSION['CARRITO'])){ ?>
		<br>
		<div class="alert alert-success">
			<?php echo ($mensaje);?>
			<a href="mostrarCarrito.php" class="badge badge-success">Ver carrito de compras</a>
		</div>

		<?php } ?>
		<div class="separador2"></div>

		<div class="div-index">
			<img src="archivos/paraelhinchalogo.png" width="30%" class="logo-index">
			<img src="archivos/front-page.png" width="65%" class="info-index">
		</div>
		<div class="separador">
		   <h3>Recomendados de la semana</h3>
			
		</div>

		<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM peh_tblproductos");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
			
			?>
			<?php
			$cont=0;
			foreach($listaProductos as $producto){ ?>

			<div class="col-3">

				<img src="<?php echo $producto['foto'];?>"  
				class="card-img-top"
				 title="<?php echo $producto['articulo'];?>" 
				 alt="Titulo" 
				 data-toggle="popover"
				 data-content="<?php echo $producto['descripcion'];?>" 
				 data-trigger="hover" >
					<div class="card-body">
					<h5 class="card-title">$ <?php echo $producto['precio'];?></h5>
					<p class="card-text"><?php echo $producto['articulo'];?></p>
					<form action="" method="POST">

					<input type="hidden" name="ID" value="<?php echo $producto['ID'];?>" >
					<input type="hidden" name="descripcion" value="<?php echo $producto['descripcion'];?>" >
					<input type="hidden" name="foto" value="<?php echo $producto['foto'];?>" >
					<input type="hidden" name="articulo" value="<?php echo $producto['articulo'];?>" >
					<input type="hidden" name="precio" value="<?php echo $producto['precio'];?>" >
					<input type="tetxt" name="cantidad" placeholder="1" maxlength="2" value="" >

					<button class="btn btn-primary"	name="btnAccion" value="Comprar" type="submit">Agregar al carrito</button>	
				</form>	


				</div>
			</div>
			<?php $cont++;
			if ($cont==8) {
				break;
			}

			 }	?>
		</div>


		</div>
	</div>
	<script type="text/javascript">
$(function () {
  $('[data-toggle="popover"]').popover()
})

</script>
<?php
include 'templates/footer.php';
?>
