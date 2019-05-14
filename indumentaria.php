
<?php

include('header.php');
?>

<div>
<?php
require("scripts/conexion.php");

$sql="SELECT * FROM productos";

$resultado = mysqli_query($conn,$sql);

?>
</div>

<link rel="stylesheet" type="text/css" href="css/index.css">
<div class="index-container" >
	<table class="index-table">
		<tr>
			<td><div class="div-foto"><img src="imagenes/camiseta9.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
            <td><div class="div-foto"><img src="imagenes/camiseta4.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>	
            <td><div class="div-foto"><img src="imagenes/camiseta9.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
			<td><div class="div-foto"><img src="imagenes/camiseta4.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
			<td><div class="div-foto"><img src="imagenes/camiseta9.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
		</tr>
		<tr>
			<td><div class="div-foto"><img src="imagenes/camiseta9.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
            <td><div class="div-foto"><img src="imagenes/camiseta4.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>	
            <td><div class="div-foto"><img src="imagenes/camiseta9.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
			<td><div class="div-foto"><img src="imagenes/camiseta4.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
			<td><div class="div-foto"><img src="imagenes/camiseta9.jpg" ><div class="div-descripcion">Caminseto barcelona titular<br>$ 650.00</div></td>
		</tr>
		

	</table>
	


</div>
</div>






</body>
</html>