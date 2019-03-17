<?php
   
  # Crear un boton de pago a partir de una preferencia con atributos requeridos minimos
  require 'vendor/autoload.php';

$precio = '150.00';
$concepto = 'compra simple';
$regreso = 'http://localhost/peh/index.php';
$cancelado = 'http://localhost/peh/contacto.php';
$final_price = $precio;
  
$mp = new MP('7064411867690821','cB5MXjRCy4vMCKQRk5SlNoMiuRajWskl');

$preference_data= array(
	"items" => [
		[
			"title" => $concepto,
			"quantity" => 1 ,
			"currency_id"=> "ARS",
			"unit_price" => (double) $final_price
		]
	],[
	"defaul_payment_method_id" => "visa",
	"installments" => 1
],
"back_urls"=>[
	"success"=> $regreso,
	"failure" => $cancelado
]




);
$preference = $mp-> create_preference($preference_data);

header ("Location: ".$preference['response']['sandbox_init_point']);


?>