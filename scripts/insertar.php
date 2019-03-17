<?php
include("../header.php");

//if(!$_SESSION){
//	header("location:login.php");
//}

?>
<link rel="stylesheet" type="text/css" href="css/estilo-form.css">
<div class="container-insert">
<form method="POST" action="insert.php" enctype="multipart/form-data">
	Foto:<br>
	<input type="file" name="foto"><br>
	Descripcion:<br>
	<input type="text" name="descripcion" required ><br>
	Numero de articulo:<br>
	<input type="text" name="nro_art" pattern="[0-9]+"><br>
	Talle:<br>
	<input type="text" name="talle" required="" pattern="[0-9]+"><br>
	Color:<br>
	<input type="text" name="color"><br>
	Fabricante:<br>
	<input type="text" name="fabricante"><br>
	Jugador:<br>
	<input type="text" name="jugador"><br>
	Temporada:<br>
	<input type="text" name="temporada" pattern="[0-9]+"><br>
	Cantidad:<br>
	<input type="text" name="cantidad" pattern="[0-9]+" title="Solo valores numericos."><br>
	Precio:<br>
	<input type="text" name="precio" required=""><br>
	Precio mayorista:<br>
	<input type="text" name="precio_mayor" required=""><br><br>

	<input type="submit" name="" value="Insertar">


</form>
</div>