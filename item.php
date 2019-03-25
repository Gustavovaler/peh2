<?php
require("templates/header.php");
require("scripts/conexion.php");

$sql = 'SELECT * FROM peh_tblproductos WHERE id="'.$_REQUEST["id"].'"';

$resultado = mysqli_query($conn,$sql);

$row=mysqli_fetch_array($resultado);


?>
<link rel="stylesheet" type="text/css" href="css/item.css">
<div class="container">
	<div class="image">
		 <img src='<?php echo $row['foto'] ;?>'>
		
	</div>
	
</div>

<?php

echo "<table >
<tr><td ><img src='".$row['foto']."' width='70'><td>".$row["descripcion"]."</td><td>".$row['talle']."</td><td>".$row['categoria']."</td><td>".$row['articulo']."</td><td></td><td>".$row['precio']."</td><td></tr></table>";
?>


