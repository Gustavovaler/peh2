<?php
session_start();

$mensaje='';

if (isset($_POST['btnAccion'])){
		switch ($_POST['btnAccion']) {
			case 'Comprar':
			if(is_numeric($_POST['ID'])){
			$ID=$_POST['ID'];			
			$descripcion=$_POST['descripcion'];
			$foto=$_POST['foto'];
			$precio=$_POST['precio'];
			$articulo=$_POST['articulo'];
			if(empty($_POST['cantidad'])){
				$cantidad=1;
			}else{
			$cantidad=$_POST['cantidad'];}


		}else{
			$mensaje="ups... id incorrecto";
		}


				if(!isset($_SESSION['CARRITO'])){
					$producto=array(
						'ID'=>$ID,
						'cantidad'=>$cantidad,
						'articulo'=>$articulo,
						'descripcion'=>$descripcion,
						'precio'=>$precio,
						'foto'=>$foto);
					    
					$_SESSION['CARRITO'][0]=$producto;
					}else{
						$numeroProductos=count($_SESSION['CARRITO']);
						$producto=array(
						'ID'=>$ID,
						'cantidad'=>$cantidad,
						'articulo'=>$articulo,
						'descripcion'=>$descripcion,
						'precio'=>$precio,
						'foto'=>$foto);
					$_SESSION['CARRITO'][$numeroProductos]=$producto;
}
		
	/*$mensaje=print_r($_SESSION,true);*/



	break;
	case 'eliminar':
		if (is_numeric($_POST['id'])) {
			$ID=$_POST['id'];
			foreach ($_SESSION['CARRITO'] as $indice=>$producto){
				if ($producto['ID']==$ID) {
					unset($_SESSION['CARRITO'][$indice]);
				    echo "<script>alert ('Elemento borrado de la lista.');</script>";
				}
			}

					}
		break;
	


	}

}
?>
