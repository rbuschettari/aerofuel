<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$informacion = $_POST['informacion'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Pais: " . $pais . " \r\n";
$mensaje .= "Informacion: " . $informacion . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'rodrigo_buschettari@hotmail.com';
$asunto = 'Mensaje de Interfuel - Contactenos';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
