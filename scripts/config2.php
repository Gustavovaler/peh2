
	<?php
	$base=$_REQUEST['base'];
	$user=$_REQUEST['usuario'];
	$pass=$_REQUEST['password'];
	
	$sql="CREATE TABLE IF NOT EXISTS peh_auth_user ( id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, nombre VARCHAR(60) NOT NULL , email  VARCHAR(150) NOT NULL UNIQUE , password VARCHAR(20) NOT NULL , enable BOOLEAN NOT NULL, admin BOOLEAN NOT NULL  ) ENGINE = MyISAM  DEFAULT CHARSET=utf8";

	$sql2="CREATE TABLE IF NOT EXISTS peh_productos(id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,articulo varchar (100) NOT NULL, descripcion varchar (200) NOT NULL, precio INT NOT NULL,precio_mayor INT NOT NULL, foto1 varchar (100) NOT NULL, foto2 varchar (100), foto3 varchar(100))";

	$conn = mysqli_connect('localhost',$user,$pass,$base);
	if(!$conn){

	echo "Error: no se pudo conectar a la base de datos ". PHP_EOL;
	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		}
	else{
		mysqli_query ($conn, $sql);
		mysqli_query ($conn, $sql2);
		echo "<h1> Configurado correctamente</h1>";

	}

mysqli_close ($conn);

?>
