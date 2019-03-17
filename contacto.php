<?php
include 'global/config.php';
include 'global/conexion2.php';
include 'templates/header.php';
?>
<br>
<br>
<br>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<label class="">Nombre y Apellido</label><br>
	<input type="text" name="articulo" class="form-control" placeholder=""><br>
	<label class="">Email</label><br>
	<input type="text" name="descripcion" class="form-control"><br>
	<label class="">Mensaje</label><br>
	<textarea class="form-control"></textarea><br>
	



     <input type="submit" name="enviar" value="Enviar mensaje" class="btn btn-success btn-lg btn-block">	
</div>
</form>
