<?php
include 'global/config.php';
include 'global/conexion2.php';


echo $_POST['id'];


$sql2="DELETE FROM peh_tblproductos WHERE ID=".$_POST['id']."";



if(mysqli_query($conn,$sql2)){
	echo '<script>alert("Articulo Eliminado !!");</script>';
	echo '<script>window.location.href = "http://paraelhincha.virtuatienda.online/admin.php";</script>';
}
else{
	echo mysqli_error($conn);
}
mysqli_close($conn);

?>









