<?php
//require("global/config.php");
require("templates/header.php");
require("global/conexion2.php");
include 'carrito.php';
$sql = 'SELECT * FROM peh_tblproductos WHERE id="'.$_REQUEST["id"].'"';
$resultado = mysqli_query($conn,$sql);
$producto=mysqli_fetch_array($resultado);
$row=$producto;
?>
<link rel="stylesheet" type="text/css" href="css/item.css">
<form action="categoria.php" method="POST">
	<input type="submit" name="boton" value="Volver al listado">
	<input type="hidden" name="categoria" value="<?php echo $producto['categoria'] ;?>">
</form>
<!-- ************************************************************ -->
<div class="container">

<link rel="stylesheet" type="text/css" href="css/item.css">
<div class="container">
	<div class="image">
		  <img src="<?php echo $producto['foto'] ;?>" class="img-fluid" alt="Responsive image">







 
		
	</div>
	
</div>








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