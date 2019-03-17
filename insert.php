<?php
include 'global/config.php';
include 'global/conexion2.php';

$articulo=$_POST['articulo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$foto=$_FILES['foto']['name'];
$stock=1


?>

<?php

	$sql2=("INSERT INTO tblproductos (articulo,descripcion,precio,foto,stock) VALUES ('$articulo','$descripcion','$precio','archivos/$foto',1)");

	if (file_exists("imagenes/".$_FILES["foto"]["name"])){
	echo $_FILES["foto"]["name"]. "ya existe.";
}
else{
	move_uploaded_file($_FILES["foto"]["tmp_name"], "archivos/".$_FILES["foto"]["name"]);
}

if(mysqli_query($conn,$sql2)){
	echo '<script>alert("Articulo Grabado exitosamente !!");</script>';
	echo '<script>window.location.href = "http://paraelhincha.virtuatienda.online/admin.php";</script>';
}
else{
	echo mysqli_error($conn);
}
mysqli_close($conn);

?>