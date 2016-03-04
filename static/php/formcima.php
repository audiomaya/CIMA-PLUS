<?php
	$destino = "contacto@cimadistribucion.com.mx";
	$nombre = $_POST ["nombre"];
	$asunto = "Sitio Cima enviado por $nombre: ".$_POST["asunto"];
	$empresa = $_POST ["empresa"];
	$direccion = $_POST ["direccion"];
	$telefono = $_POST ["telefono"];
	$ferreteria = $_POST ["ferreteria"];
	$electrico = $_POST ["electrico"];
	$ingenieros = $_POST ["ingenieros"];
	$mantenimiento = $_POST ["mantenimiento"];
	$cisternas = $_POST ["cisternas"];
	$comentarios = $_POST ["comentarios"];
	$contenido = "Nombre:".$nombre."\nAsunto:".$asunto."\nEmpresa:".$empresa."\nDireccion:".$direccion."\nTelefono:".$telefono."\nFerreteria:".$ferreteria."\nElectrico:".$electrico."\nIngenieros:".$ingenieros."\nMantenimiento:".$mantenimiento."\nCisternas:".$cisternas."\nComentarios:".$comentarios;

	mail($destino,"Contacto", $contenido);
	header("Location:/index.html");
?>
