<?php
include 'global/config.php';
include 'global/conexion.php';
//include 'carrito.php';
include 'templates/header.php';
?>
<br>
<br> 
<br>
<?php

?>
<form action="edit-item.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<label>Categoria</label><br>
	<input type="text" name="categoria" placeholder="<?php echo $_POST['categoria']?>" class="form-control"><br>
	<label class="">Articulo</label><br>
	<input type="text" name="articulo" class="form-control" placeholder="<?php echo $_POST['articulo']?>"><br>
	<label class="">Descripcion</label><br>
	<input type="text" name="descripcion" class="form-control" placeholder="<?php echo $_POST['descripcion']?>"><br>
	<label class="">Precio</label><br>
	<input type="text" name="precio" class="form-control" placeholder="<?php echo $_POST['precio']?>"><br>
	<label class="">Foto</label><img src="<?php echo $_POST['foto']?>" width="40px" >
	<br>
	<input type="file" name="foto" class="form-control"><br>
	<input type="hidden" name="id" value="<?php echo $_POST['id'];?>">



     <input type="submit" name="enviar" value="Insertar" class="btn btn-success btn-lg btn-block">	
</div>
</form>

