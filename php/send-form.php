<?php 
error_reporting(0); 
$name = $_POST['nombre']; 
$email= $_POST['email'];
$message=$_POST['message']; 
$header = 'From: ' . $email .; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .="dice".$_POST['message'] . " \r\n"; 

$to = 'AKI PONES TU CORREO; 
$asunto = 'AKI LO Q KIERAS'; 

mail($to, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 