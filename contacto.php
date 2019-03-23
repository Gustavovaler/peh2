<?php

include 'global/conexion2.php';
include 'templates/header.php';
?>
<br>
<br>
<br>
<form action="env-mail.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<label class="">Nombre y Apellido</label><br>
	<input type="text" name="nombreyapellido" class="form-control" placeholder=""><br>
	<label class="">Email</label><br>
	<input type="text" name="email" class="form-control"><br>
	<label class="">Mensaje</label><br>
	<textarea class="form-control" name="mensaje"></textarea><br>
	



     <input type="submit" name="enviar" value="Enviar mensaje" class="btn btn-success btn-lg btn-block">	
</div>
</form>
