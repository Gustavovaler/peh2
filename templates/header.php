<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Para el Hiincha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a href="" class="navbar-brand">Para el hincha</a>
		<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>			
		</button>
		<div id="my-nav" class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Inicio</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="contacto.php">Contacto</a>
				</li>
				<li>
							<div class="dropdown">
				  <button onclick="myFunction()" class="dropbtn">Productos</button>
				  <div id="myDropdown" class="dropdown-content">
				  	<form action="categoria.php" method="POST">
				    <input type="submit" name="categoria" value="Camisetas" class="btn-lin">
				    <input type="submit" name="categoria" value="Conjuntos" class="btn-lin">
				    <input type="submit" name="categoria" value="Camperas" class="btn-lin">
				    <input type="submit" name="categoria" value="Pantalones" class="btn-lin">
				    <input type="submit" name="categoria" value="Shorts" class="btn-lin">
				    <input type="submit" name="categoria" value="Accesorios" class="btn-lin">
				    <input type="submit" name="categoria" value="Otros" class="btn-lin">
				    </form>
				  </div>
				</div>
								</li>
				<li class="nav-item active">
					<a class="nav-link" href="mostrarCarrito.php">Carrito(<?php
						echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);

						?>)</a>
				</li>
			</ul>
			
		</div>
		


	</nav>
	<br>
	<script type="text/javascript">

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}</script>

	<div class="container">