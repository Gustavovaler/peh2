<?php
require("header.php");
require("scripts/conexion.php");

$sql = 'SELECT * FROM productos WHERE id="'.$_REQUEST["id"].'"';

$resultado = mysqli_query($conn,$sql);

$row=mysqli_fetch_array($resultado);


?>
<link rel="stylesheet" type="text/css" href="css/item.css">
<div class="container">
	<div class="image">
		 <img src='imagenes/<?php echo $row['nombre_foto'] ;?>'>
		
	</div>
	
</div>

<?php

echo "<table >
<tr><td ><img src='imagenes/".$row['nombre_foto']."' width='70'><td>".$row["descripcion"]."</td><td>".$row['talle']."</td><td>".$row['color']."</td><td>".$row['nro_art']."</td><td>".$row['jugador']."</td><td>".$row['precio']."</td><td>".$row['cantidad']."
</tr></table>";
?>


