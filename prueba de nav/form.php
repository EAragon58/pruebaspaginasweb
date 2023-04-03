<?php


$nombre = $_POST['name']
$email = $_POST['email']
$mensaje = $_POST['textarea']

$mensaje = "Este mensaje fue enviaado por" .$nombre. ",\r\n";
$mensaje .= "Es email es" .$email.  ",\r\n";
$mensaje .= "Mensaje" .$_POST['mensaje']. ",\r\n";
$mensaje .= "Enviado el" .date("d,m,Y", time());

$para = 'holason279@gmail.com';
$asunto = 'Este email fue enviada de la web'


mail( $para, $asunto, utf8_decode($mensaje) $header);

header('Location:index.html');
?>