<?php

$para = "audiomaya@hotmail.com";
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
$de = $_POST ["mail"];

$headers = "MIME-Version:1.0;\r\n";
$headers .= "Content-type: text/html; \r\n charset=UTF-8; \r\n";
$headers .= "From: $de \r\n";
$headers .= "To: $para; \r\n Subject:$asunto; \r\n";

if(mail($para,$nombre,$asunto,$empresa,$direccion,$telefono,$ferreteria,$electrico,$ingenieros,$mantenimiento,$cisternas,$comentarios,$headers))
	echo "Enviado correctamente";
else
	echo "Fallo en envio";


?>
