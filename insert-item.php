<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/header.php';
?>
<br>
<br>
<br>
<form action="insert.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<label class="">Categoria</label><br>
	<select name="categoria">
	 <option value="Pantalones" >Pantalones</option>
						  <option value="Shorts">Shorts</option>
						  <option value="Camisetas">Camisetas</option>
						  <option value="Conjuntos">Conjuntos</option>
						  <option value="Camperas">Camperas</option>
						  <option value="Accesorios">Accesorios</option>
						  <option value="Otros">Otros</option>
						</select><br>

	<label class="">Articulo</label><br>
	<input type="text" name="articulo" class="form-control" placeholder="Hata 100 caracteres."><br>
	<label class="">Descripcion</label><br>
	<input type="text" name="descripcion" class="form-control"><br>
	<label class="">Precio</label><br>
	<input type="text" name="precio" class="form-control"><br>
	<label class="">Foto</label><br>
	<input type="file" name="foto" class="form-control"><br>



     <input type="submit" name="enviar" value="Insertar" class="btn btn-success btn-lg btn-block">	
</div>
</form>



