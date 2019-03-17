<?php
include 'global/config.php';
include 'global/conexion.php';
//include 'carrito.php';
include 'templates/header.php';
?>
<br>
<br>
<br>
<form action="edit-item.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<label class="">Articulo</label><br>
	<input type="text" name="articulo" class="form-control" placeholder="Hata 100 caracteres."><br>
	<label class="">Descripcion</label><br>
	<input type="text" name="descripcion" class="form-control"><br>
	<label class="">Precio</label><br>
	<input type="text" name="precio" class="form-control"><br>
	<label class="">Foto</label><br>
	<input type="file" name="foto" class="form-control"><br>
	<input type="hidden" name="id" value="<?php echo $_POST['id'];?>">



     <input type="submit" name="enviar" value="Insertar" class="btn btn-success btn-lg btn-block">	
</div>
</form>

